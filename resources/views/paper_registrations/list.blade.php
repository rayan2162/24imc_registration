@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mt-5 text-center">Registration List</h2>
<p class="text-center">(Please check below to confirm whether your registration has been received.)</p>
<br><br>
    <h1 class="text-center">24<sup>th</sup> International Mathematics Conference</h1>
    <br>
        <div class="d-flex justify-content-center align-items-center mb-4 gap-4">
            <img src="{{ asset('/images/cu_logo.png') }}" alt="CU Logo" style="height: 70px;">
            <img src="{{ asset('/images/bms_logo.png') }}" alt="BMS Logo" style="height: 95px;">
        </div>
    <h5 class="card-title mb-3 text-center">Organized by: Department of Mathematics, University of Chittagong</h5>
      <h5 class="card-title mb-5 text-center">Supported by: Bangladesh Mathematical Society</h5>

<h5 style="text-align: justify" class="container mb-5">
    <li>
        Please check that your registration appears in the list below. 
        If your name or paper ID is present, please wait for the approval process to be completed — you will also receive an email notification. 
    </li>
  <br>
  <li>
If your submission is not listed, kindly complete the registration form and check again. 
  If the issue persists, contact us for assistance.
  </li> 
  <br>
  <li>
      Once your registration is submitted successfully, the status of your payment and manuscript approval will be updated after review, and an email confirmation will be sent. 
      For any questions or concerns, please feel free to contact us.
  </li>
</h5>



    <table class="content table table-striped">
        <thead>
            <tr>
                <th>Registration Number</th>
                <th>Full Name</th>
                <th>Paper ID.</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($papers as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->full_name }}</td>
                <td>{{ $p->paper_id_no }}</td>
                <td>
                    @if($p->is_approved)
                        <span class="badge bg-success">Approved</span>
                    @else
                        <span class="badge bg-warning">Pending for Approval</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
