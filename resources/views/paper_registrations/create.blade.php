@extends('layouts.app')

@section('content')

{{-- Info Section --}}
<div class="container my-5">
    <div class="alert mt-3 py-3" style="background: #0072BB; color:white" role="alert">
        <h1 class="text-center text-white pt-3">Registration</h1>
        <h2 class="text-center text-white">24<sup>th</sup> International Mathematics Conference</h2>
        <br>
        <div class="d-flex justify-content-center align-items-center mb-4 gap-4">
            <img src="{{ asset('/images/cu_logo_white.png') }}" alt="CU Logo" style="height: 80px;">
            <img src="{{ asset('/images/bms_logo.png') }}" alt="BMS Logo" style="height: 80px;">
        </div>
    <h5 class="card-title mb-3 text-center">Organized by: Department of Mathematics, University of Chittagong</h5>
      <h5 class="card-title mb-3 text-center">Supported by: Bangladesh Mathematical Society</h5>
      <br>
        <h2 class="alert-heading text-center">Please read this section carefully before filling up the registration form below</h2>
        <br>
        <p class="mb-2" style="text-align: justify">
            <strong>Important:</strong> Review all input fields and instructions before starting your registration. Ensure that you have all required documents and information ready. If you encounter any issues or have questions regarding the registration process, please contact us at:
            <br>
            <br>
            <strong>Email:</strong> <a style="color: white" href="mailto:mathchair@cu.ac.bd">mathchair@cu.ac.bd</a><br>
            <strong>Mobile:</strong> +880 1816 823 648
        </p>
        <hr>
        <p style="text-align: justify">
            Registration for the <strong>24<sup>th</sup> International Mathematics Conference</strong> is now open. Participants are encouraged to register early to secure their spot and take advantage of early bird rates. The registration fee includes access to all conference sessions, materials, and meals during the event.
        </p>
        <ul>
            <li><strong>Early Bird registration:</strong> September 01, 2025 - October 10, 2025.</li>
            <li><strong>Last Date of Registration:</strong> November 30, 2025.</li>
            <li>For BMS members, please mention your BMS identification number in the form.</li>
            <li style="text-align: justify">The registration fee includes participation in conference events, kit (abstract book, proceedings, pen, pad, etc.), refreshments, lunch, and gala dinner.</li>
        </ul>
        <br>
        <h5 class="mb-3 text-center">Registration Fee Details</h5>
        <div class="table-responsive">
            <table class="table table-bordered table-sm align-middle text-white">
                <thead class="table-light">
                    <tr>
                        <th>Category</th>
                        <th>Fee</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Local Delegates</td>
                        <td>4000 BDT<br><small>(Early Bird 3500 BDT)</small></td>
                    </tr>
                    <tr>
                        <td>Local Delegates (For BMS Members)</td>
                        <td>3500 BDT<br><small>(Early Bird 3000 BDT)</small></td>
                    </tr>
                    <tr>
                        <td>SAARC Delegates</td>
                        <td>100 USD<br><small>(Early Bird 80 USD)</small></td>
                    </tr>
                    <tr>
                        <td>Foreign Delegates</td>
                        <td>120 USD<br><small>(Early Bird 100 USD)</small></td>
                    </tr>
                    <tr>
                        <td>Accompanying Person</td>
                        <td>2000 BDT</td>
                    </tr>
                    <tr>
                        <td>Student (Local)</td>
                        <td>3000 BDT<br><small>(Early Bird 2500 BDT)</small></td>
                    </tr>
                    <tr>
                        <td>Student (SAARC/Foreign)</td>
                        <td>100 USD<br><small>(Early Bird 70 USD)</small></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>


                    {{-- Payment info --}}
        <div class="col-12 text-dark">
            <div class="card mb-4">
                <div class="card-body">
                     <h2 class="text-center my-3 fw-bold">Payment Information</h2>
        <p style="text-align: justify">You may complete your payment via <strong>Bank</strong> or <strong>Bkash</strong>. Please find the necessary details for both methods below.</p>
        
        <p style="text-align: justify"><strong>IMPORTANT:</strong> Kindly take a screenshot of the transaction confirmation. This will be required as <strong>proof of payment</strong> during filling up registration form and verification by organizing committee.</p>
                    <br>
                    <h4 class="mb-3 fw-bold">Bank Account Details</h4>
                    <p><strong>Account Name:</strong> 24th International Mathematics Conference 2025</p>
                    <p><strong>Account No:</strong> 0200024463104</p>
                    <p><strong>Routing No:</strong> 010152085</p>
                    <p><strong>Bank Name:</strong> Agrani Bank PLC</p>
                    <p><strong>Branch:</strong> Chittagong University, Chattogram, BD</p>
                    <hr>
                    <h4 class="mb-3 fw-bold">Bkash Details</h4>
                    <p><b>Note: </b> Please add additional 20 taka per thousand of the registration fee as cashout fee of Bkash.</p>
                    <p><strong>Bkash Number: </strong> 01841 - 987929 (Personal)</p>
                    <p><b>Bkash Reference: </b>Your_paper_id</p>
                </div>
            </div>
        </div>


    </div>
</div>


{{-- Form Section --}}
<div class="container p-4 my-5" style="background: lightgray">
    <h2 class="card-title mb-3 text-center">Registration Form</h2>
      <h4 class="card-title mb-3 text-center">24<sup>th</sup> International Mathematics Conference </h4>
      <br>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('paper-registrations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Full Name (Required - In Capital Form)</label>
                <input type="text" name="full_name" value="{{ old('full_name') }}" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Affiliation / Designation (Optional)</label>
                <input type="text" name="affiliation" value="{{ old('affiliation') }}" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Department (Optional)</label>
                <input type="text" name="department" value="{{ old('department') }}" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Institution (Optional)</label>
                <input type="text" name="institution" value="{{ old('institution') }}" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Country (Required)</label>
                <input type="text" name="country" value="{{ old('country') }}" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Phone (Required - Whatsapp Number)</label>
                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Email (Required)</label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">BMS ID No (Optional - If you are a BMS Member)</label>
                <input type="text" name="bms_id_no" value="{{ old('bms_id_no') }}" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Author's Photograph (Required - JPG/JPEG/PNG, max 5MB)</label>
                <input type="file" name="authors_photograph" class="form-control" accept=".jpg,.jpeg,.png" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Student ID Card (Optional - JPG/JPEG/PNG, max 5MB)</label>
                <input type="file" name="student_id_card" class="form-control" accept=".jpg,.jpeg,.png">
            </div>

            <div class="col-12 mb-3">
                <label class="form-label">Research Scope (Required)</label>
                <select name="research_scope" class="form-select" required>
                    <option value="">Select Research Scope</option>
                    <option value="Analysis" {{ old('research_scope') === 'Analysis' ? 'selected' : '' }}>Analysis</option>
                    <option value="Algebra" {{ old('research_scope') === 'Algebra' ? 'selected' : '' }}>Algebra</option>
                    <option value="Complex Analysis" {{ old('research_scope') === 'Complex Analysis' ? 'selected' : '' }}>Complex Analysis</option>
                    <option value="Mathematical Finance & Economics" {{ old('research_scope') === 'Mathematical Finance & Economics' ? 'selected' : '' }}>Mathematical Finance & Economics</option>
                    <option value="Cryptography and Coding Theory" {{ old('research_scope') === 'Cryptography and Coding Theory' ? 'selected' : '' }}>Cryptography and Coding Theory</option>
                    <option value="Graph Theory and Network Analysis" {{ old('research_scope') === 'Graph Theory and Network Analysis' ? 'selected' : '' }}>Graph Theory and Network Analysis</option>
                    <option value="Rings & Modules" {{ old('research_scope') === 'Rings & Modules' ? 'selected' : '' }}>Rings & Modules</option>
                    <option value="Geometry and Topology" {{ old('research_scope') === 'Geometry and Topology' ? 'selected' : '' }}>Geometry and Topology</option>
                    <option value="Data Science and Machine Learning" {{ old('research_scope') === 'Data Science and Machine Learning' ? 'selected' : '' }}>Data Science and Machine Learning</option>
                    <option value="Number Theory" {{ old('research_scope') === 'Number Theory' ? 'selected' : '' }}>Number Theory</option>
                    <option value="Fuzzy Mathematics" {{ old('research_scope') === 'Fuzzy Mathematics' ? 'selected' : '' }}>Fuzzy Mathematics</option>
                    <option value="Functional Analysis" {{ old('research_scope') === 'Functional Analysis' ? 'selected' : '' }}>Functional Analysis</option>
                    <option value="Numerical Analysis" {{ old('research_scope') === 'Numerical Analysis' ? 'selected' : '' }}>Numerical Analysis</option>
                    <option value="Theory of Relativity" {{ old('research_scope') === 'Theory of Relativity' ? 'selected' : '' }}>Theory of Relativity</option>
                    <option value="Fluid Mechanics" {{ old('research_scope') === 'Fluid Mechanics' ? 'selected' : '' }}>Fluid Mechanics</option>
                    <option value="Mathematical Biology" {{ old('research_scope') === 'Mathematical Biology' ? 'selected' : '' }}>Mathematical Biology</option>
                    <option value="Operations Research" {{ old('research_scope') === 'Operations Research' ? 'selected' : '' }}>Operations Research</option>
                    <option value="Probability and Statistics" {{ old('research_scope') === 'Probability and Statistics' ? 'selected' : '' }}>Probability and Statistics</option>
                    <option value="Computational Fluid Dynamics" {{ old('research_scope') === 'Computational Fluid Dynamics' ? 'selected' : '' }}>Computational Fluid Dynamics</option>
                    <option value="Relativistic Cosmology" {{ old('research_scope') === 'Relativistic Cosmology' ? 'selected' : '' }}>Relativistic Cosmology</option>
                    <option value="Optimal Control" {{ old('research_scope') === 'Optimal Control' ? 'selected' : '' }}>Optimal Control</option>
                    <option value="Computational Mathematics" {{ old('research_scope') === 'Computational Mathematics' ? 'selected' : '' }}>Computational Mathematics</option>
                    <option value="Mathematical Modelling" {{ old('research_scope') === 'Mathematical Modelling' ? 'selected' : '' }}>Mathematical Modelling</option>
                    <option value="Differential Equations" {{ old('research_scope') === 'Differential Equations' ? 'selected' : '' }}>Differential Equations</option>
                    <option value="Operations Management" {{ old('research_scope') === 'Operations Management' ? 'selected' : '' }}>Operations Management</option>
                    <option value="Quantum Mechanics" {{ old('research_scope') === 'Quantum Mechanics' ? 'selected' : '' }}>Quantum Mechanics</option>
                    <option value="Dynamical System" {{ old('research_scope') === 'Dynamical System' ? 'selected' : '' }}>Dynamical System</option>
                    <option value="Plasma Physics" {{ old('research_scope') === 'Plasma Physics' ? 'selected' : '' }}>Plasma Physics</option>
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Paper ID No. (Required)</label>
                <input type="text" name="paper_id_no" value="{{ old('paper_id_no') }}" class="form-control" required>
            </div>

            <div class="col-md-8 mb-3">
                <label class="form-label">Paper Title (Required)</label>
                <input type="text" name="paper_title" value="{{ old('paper_title') }}" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Authors Name (Required - Name of all Authors)</label>
                <input type="text" name="authors_name" value="{{ old('authors_name') }}" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Upload Manuscript (Required - DOC/DOCX/PDF, max 5MB) *</label>
                <input type="file" name="manuscript" class="form-control" accept=".doc,.docx,.pdf" required>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Presentation Type (Required)</label>
                <select name="presentation_type" class="form-select" required>
                    <option value="">Choose...</option>
                    <option value="Physical" {{ old('presentation_type') === 'Physical' ? 'selected' : '' }}>Physical</option>
                    <option value="Virtual" {{ old('presentation_type') === 'Virtual' ? 'selected' : '' }}>Virtual</option>
                </select>
            </div>

            <div class="col-md-8 mb-3">
                <label class="form-label">Full name of Presenter (Required)</label>
                <input type="text" name="presenter_full_name" value="{{ old('presenter_full_name') }}" class="form-control" required>
            </div>


            <div class="col-md-4 mb-3">
                <label class="form-label">Payment Method (Required)</label>
                <select name="payment_method" class="form-select" required>
                    <option value="">Choose...</option>
                    <option value="bank" {{ old('payment_method') === 'bank' ? 'selected' : '' }}>Bank</option>
                    <option value="bkash" {{ old('payment_method') === 'bkash' ? 'selected' : '' }}>Bkash</option>
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Tracking number (Bank) / Transaction id (Bkash) - (Required)</label>
                <input type="text" name="tracking_number" value="{{ old('tracking_number') }}" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label">Proof of payment (Required - JPG/JPEG/PNG/PDF, max 5MB) *</label>
                <input type="file" name="proof_of_payment" class="form-control" accept=".jpg,.jpeg,.png,.pdf" required>
            </div>

        </div>

        <div class="mt-4 text-center">
            <button class="btn btn-primary text-center" type="submit">Submit Registration</button>
            <button type="button" class="btn btn-secondary ms-2" onclick="printRegistrationPDF()">Print PDF</button>
        </div>
        <script>
            function printRegistrationPDF() {
            window.print();
            }
        </script>
    </form>
</div>
@endsection
