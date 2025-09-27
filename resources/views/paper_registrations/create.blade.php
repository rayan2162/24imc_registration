@extends('layouts.app')

@section('content')

{{-- Info Section --}}
<div style="position: relative;">
    <div style="
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        z-index: -1;
        background: url('{{ asset('/images/reg_bg.jpg') }}') no-repeat center center fixed;
        background-size: cover;
        opacity: 0.4;
    "></div>
<div class="container my-5">
<h2 class="mt-5 text-center fw-bold">Registration</h2>
<p style="font-size: 0.9rem;" class="text-center">
  Please review the entire page carefully. All registration information and the registration form are provided below.
</p>

<br><br>
    <h1 class="text-center fw-bold">24<sup>th</sup> International Mathematics Conference</h1>
    <br>
    <div class="d-flex justify-content-center align-items-center mb-4 gap-4">
        <img src="{{ asset('/images/cu_logo.png') }}" alt="CU Logo" style="height: 80px;">
        <img src="{{ asset('/images/bms_logo.png') }}" alt="BMS Logo" style="height: 100px;">
    </div>
    <h5 class="card-title mb-3 text-center">Organized by: Department of Mathematics, University of Chittagong</h5>
    <h5 class="card-title mb-3 text-center">Supported by: Bangladesh Mathematical Society</h5>
    <br>

    <div class="alert mt-3 py-3" style="background: #0072BB; color:white" role="alert">
    <h2 class="alert-heading text-center">Please read this section carefully before filling up the registration form below</h2>
        <br>
        <p class="mb-2" style="text-align: justify">
            <strong>Important:</strong> Review all input fields and instructions before starting your Registration. Ensure that you have all required documents and information ready. If you encounter any issues or have questions regarding the registration process, please contact us at:
            <br>
            <br>
            <strong>Email:</strong> <a style="color: white" href="mailto:24imc2025@gmail.com">24imc2025@gmail.com</a><br>
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
    <h2 class="card-title mb-3 text-center fw-bold">Registration Form</h2>
      <h4 class="card-title mb-3 text-center">24<sup>th</sup> International Mathematics Conference </h4>
      <br>

    {{-- @if(session('success'))
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
    @endif --}}

    <form action="{{ route('paper-registrations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label"><span class="fw-bold">Full Name</span>  (Required - In Capital Form)</label>
                <input style="border: solid #0072BB 1px" type="text" name="full_name" value="{{ old('full_name') }}" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Affiliation / Designation(Optional)</label>
                <input style="border: solid #0072BB 1px" type="text" name="affiliation" value="{{ old('affiliation') }}" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Department (Optional)</label>
                <input style="border: solid #0072BB 1px" type="text" name="department" value="{{ old('department') }}" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Institution (Optional)</label>
                <input style="border: solid #0072BB 1px" type="text" name="institution" value="{{ old('institution') }}" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label"><span class="fw-bold">Country</span> (Required)</label>
                <input style="border: solid #0072BB 1px" type="text" name="country" value="{{ old('country') }}" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label"><span class="fw-bold">Phone</span> (Required - Whatsapp Number)</label>
                <input style="border: solid #0072BB 1px" type="text" name="phone" value="{{ old('phone') }}" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label"><span class="fw-bold">Email</span> (Required)</label>
                <input style="border: solid #0072BB 1px" type="email" name="email" value="{{ old('email') }}" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">BMS ID No (Optional - If you are a BMS Member)</label>
                <input style="border: solid #0072BB 1px" type="text" name="bms_id_no" value="{{ old('bms_id_no') }}" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label"><span class="fw-bold">Author's Photograph</span> (Required - JPG/JPEG/PNG, max 5MB)</label>
                <input style="border: solid #0072BB 1px" type="file" name="authors_photograph" class="form-control" accept=".jpg,.jpeg,.png" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Student ID Card (Optional - JPG/JPEG/PNG, max 5MB)</label>
                <input style="border: solid #0072BB 1px" type="file" name="student_id_card" class="form-control" accept=".jpg,.jpeg,.png">
            </div>

            <div class="col-12 mb-3">
                <label class="form-label"><span class="fw-bold">Research Scope </span>(Required)</label>
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
                <label class="form-label"><span class="fw-bold">Paper ID No. </span>(Required)</label>
                <input style="border: solid #0072BB 1px" type="text" name="paper_id_no" value="{{ old('paper_id_no') }}" class="form-control" required>
            </div>

            <div class="col-md-8 mb-3">
                <label class="form-label"><span class="fw-bold">Paper Title </span> (Required)</label>
                <input style="border: solid #0072BB 1px" type="text" name="paper_title" value="{{ old('paper_title') }}" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label"><span class="fw-bold">All Authors' Names </span> (Required - Full names of all authors, separated by commas.)</label>
                <input style="border: solid #0072BB 1px" type="text" name="authors_name" value="{{ old('authors_name') }}" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label"><span class="fw-bold">Upload Manuscript </span> (Required - DOC/DOCX/PDF, max 5MB) </label>
                <input style="border: solid #0072BB 1px" type="file" name="manuscript" class="form-control" accept=".doc,.docx,.pdf" required>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label"><span class="fw-bold">Presentation Type </span>(Required)</label>
                <select name="presentation_type" class="form-select" required>
                    <option value="">Choose...</option>
                    <option value="Physical" {{ old('presentation_type') === 'Physical' ? 'selected' : '' }}>Physical</option>
                    <option value="Virtual" {{ old('presentation_type') === 'Virtual' ? 'selected' : '' }}>Virtual</option>
                </select>
            </div>

            <div class="col-md-8 mb-3">
                <label class="form-label"><span class="fw-bold">Full name of Presenter </span>(Required)</label>
                <input style="border: solid #0072BB 1px" type="text" name="presenter_full_name" value="{{ old('presenter_full_name') }}" class="form-control" required>
            </div>


            <div class="col-md-4 mb-3">
                <label class="form-label"><span class="fw-bold">Payment Method </span>(Required)</label>
                <select name="payment_method" class="form-select" required>
                    <option value="">Choose...</option>
                    <option value="bank" {{ old('payment_method') === 'bank' ? 'selected' : '' }}>Bank</option>
                    <option value="bkash" {{ old('payment_method') === 'bkash' ? 'selected' : '' }}>Bkash</option>
                </select>
            </div>

<div class="col-md-4 mb-3">
    <label for="registration_type" class="form-label">
        <span class="fw-bold">Registration Type</span> (Required)
    </label>
    <select name="registration_type" id="registration_type" class="form-select" required>
        <option value="">Choose...</option>
        <option value="early_bird" {{ old('registration_type') === 'early_bird' ? 'selected' : '' }}>Early Bird</option>
        <option value="regular" {{ old('registration_type') === 'regular' ? 'selected' : '' }}>Regular</option>
    </select>
</div>


            <div class="col-md-4 mb-3">
                <label class="form-label"><span class="fw-bold">Tracking number (Bank) / Transaction id (Bkash)</span> (Required)</label>
                <input style="border: solid #0072BB 1px" type="text" name="tracking_number" value="{{ old('tracking_number') }}" class="form-control">
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label"><span class="fw-bold">Ammount</span> (Required)</label>
                <input style="border: solid #0072BB 1px" type="text" name="ammount" value="{{ old('ammount') }}" class="form-control">
            </div>
            
            
            <div class="col-md-4 mb-3">
                <label class="form-label"><span class="fw-bold">Payment Date</span> (Required)</label>
                <input style="border: solid #0072BB 1px" type="date" name="payment_date" value="{{ old('payment_date') }}" class="form-control" required>
            </div>

            <div class="col-md-4 mb-3">
                <label class="form-label"><span class="fw-bold">Proof of payment </span> (Required - JPG/JPEG/PNG/PDF, max 5MB) *</label>
                <input style="border: solid #0072BB 1px" type="file" name="proof_of_payment" class="form-control" accept=".jpg,.jpeg,.png,.pdf" required>
            </div>

        </div>

        <h5 style="text-align: justify" class="mb-4">
  <strong>Important Instructions:</strong><br><br>
  After successfully submitting the registration form, please use the <strong>"Print Registration Copy"</strong> button to print a copy of your registration. This printed form will serve as your proof of registration and must be presented at the event venue for entry.<br><br>
  Once submitted, please verify that your registration has been added to our official list by visiting the following link: <a href="YOUR-LINK-HERE" target="_blank">[Check Registration Status]</a>. This list will also display the status of your registration and payment verification once reviewed by the 24IMC Committee.<br><br>
 <input type="checkbox" required>
  By submitting this form, you confirm that all information provided is accurate and complete to the best of your knowledge. The 24IMC Committee will not be held responsible for any issues arising from incorrect or incomplete information submitted by the participant.
</h5>


    {{-- @if(session('success'))
        <script>
            window.location.href = "{{ url('/list') }}";
        </script>
    @endif

    @if($errors->any())
        <script>
            alert("{{ implode('\n', $errors->all()) }}");
        </script>
    @endif --}}

@if(session('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                title: 'Registration Completed',
                html: 'Your registration has been successfully completed. <br><br>' +
                      'Please click the OK button to proceed to the official registration list. <br><br>' +
                      'Wait for the approval process — you can check your status in the list, and you will also be notified via email.',
                icon: 'success',
                confirmButtonText: 'OK',
                customClass: {
                    popup: 'swal-wide'
                }
            }).then(function (result) {
                if (result.isConfirmed) {
                    window.location.href = "{{ url('/list') }}";
                }
            });
        });
    </script>
@endif


    @if($errors->any())
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                title: 'Registration Failed',
                html: `
                    <p>Please check the following errors and try again:</p>
                    <ul style="text-align: left;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                `,
                icon: 'error',
                confirmButtonText: 'OK',
                customClass: {
                    popup: 'swal-wide'
                }
            });
        });
    </script>
    @endif


        <div class="my-4 text-center">
            <button class="btn btn-primary text-center" type="submit">Submit Registration Form</button>
            <button type="button" class="btn btn-secondary ms-2" onclick="printRegistrationPDF()">Print Registration Copy</button>
        </div>
        <script>
            function printRegistrationPDF() {
            window.print();
            }
        </script>
    </form>
</div>
@endsection
