<?php

namespace App\Http\Controllers;

use App\Models\PaperRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class PaperRegistrationController extends Controller
{
    // Optional: protect dashboard routes with auth middleware in routes/web.php

    
    public function index()
    {
        // Paginate for dashboard
        $papers = PaperRegistration::latest()->paginate(300);
        return view('paper_registrations.index', compact('papers'));
    }
    
    public function list()
    {
        // Paginate for dashboard
        $papers = PaperRegistration::latest()->paginate(300);
        return view('paper_registrations.list', compact('papers'));
    }



    public function create()
    {
        return view('paper_registrations.create');
    }

    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'full_name' => 'required|string|max:255',
            'affiliation' => 'nullable|string|max:255',
            'department' => 'nullable|string|max:255',
            'institution' => 'nullable|string|max:255',
            'country' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'bms_id_no' => 'nullable|string|max:255',

            'authors_photograph' => 'required|file|mimes:jpg,jpeg,png|max:5120',
            'student_id_card' => 'nullable|file|mimes:jpg,jpeg,png|max:5120',

            'research_scope' => 'required|string',
            'paper_id_no' => 'required|string|max:255',
            'paper_title' => 'required|string',
            'authors_name' => 'required|string',
            'manuscript' => 'required|file|mimes:doc,docx,pdf|max:5120',

            'presentation_type' => ['required', Rule::in(['Physical','Virtual'])],
            'presenter_full_name' => 'required|string|max:255',

            'payment_method' => ['required', Rule::in(['bank','bkash'])],
            'tracking_number' => 'nullable|string|max:255',
            'proof_of_payment' => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:5120',
        ];

        $validated = $request->validate($rules);

        // Use DB transaction + try/catch
        DB::beginTransaction();

        // vars to keep track of stored file paths (for cleanup on failure)
        $stored = [];

        try {
            // 1) store files in public disk
            $stored['authors_photograph'] = $request->file('authors_photograph')
                ->store('paper_registrations/photos', 'public');

            if ($request->hasFile('student_id_card')) {
                $stored['student_id_card'] = $request->file('student_id_card')
                    ->store('paper_registrations/student_ids', 'public');
            } else {
                $stored['student_id_card'] = null;
            }

            $stored['manuscript'] = $request->file('manuscript')
                ->store('paper_registrations/manuscripts', 'public');

            $stored['proof_of_payment'] = $request->file('proof_of_payment')
                ->store('paper_registrations/payments', 'public');

            // 2) create DB record
            $paper = PaperRegistration::create([
                'full_name' => $validated['full_name'],
                'affiliation' => $validated['affiliation'] ?? null,
                'department' => $validated['department'] ?? null,
                'institution' => $validated['institution'] ?? null,
                'country' => $validated['country'],
                'phone' => $validated['phone'],
                'email' => $validated['email'],
                'bms_id_no' => $validated['bms_id_no'] ?? null,

                'authors_photograph' => $stored['authors_photograph'],
                'student_id_card' => $stored['student_id_card'],

                'research_scope' => $validated['research_scope'],
                'paper_id_no' => $validated['paper_id_no'],
                'paper_title' => $validated['paper_title'],
                'authors_name' => $validated['authors_name'],
                'manuscript' => $stored['manuscript'],

                'presentation_type' => $validated['presentation_type'],
                'presenter_full_name' => $validated['presenter_full_name'],

                'payment_method' => $validated['payment_method'],
                'tracking_number' => $validated['tracking_number'],
                'proof_of_payment' => $stored['proof_of_payment'],

                // created with default is_approved = false
            ]);

            DB::commit();

            return redirect()->route('paper-registrations.create')
                ->with('success', 'Paper registration submitted successfully. Awaiting approval.');

        } catch (\Throwable $e) {
            DB::rollBack();

            // Attempt to delete any uploaded files to avoid inconsistent state
            try {
                foreach ($stored as $path) {
                    if (!empty($path) && Storage::disk('public')->exists($path)) {
                        Storage::disk('public')->delete($path);
                    }
                }
            } catch (\Throwable $ex) {
                Log::warning('Cleanup failed after paper registration error: ' . $ex->getMessage());
            }

            // Log the original error for debugging
            Log::error('PaperRegistration store failed: ' . $e->getMessage(), [
                'exception' => $e,
            ]);

            // Return safe error message to user
            return back()
                ->withInput()
                ->withErrors(['error' => 'Failed to submit registration. Please try again or contact us.']);
        }
    }

    // Optional: small show method for viewing a single registration
    public function show(PaperRegistration $paper_registration)
    {
        return view('paper_registrations.show', compact('paper_registration'));
    }

    // Optional: admin approve toggle (protect with admin middleware in routes)
    public function approve(PaperRegistration $paper_registration)
    {
        $paper_registration->is_approved = ! $paper_registration->is_approved;
        $paper_registration->save();

        return back()->with('success', 'Approval status updated.');
    }
}
