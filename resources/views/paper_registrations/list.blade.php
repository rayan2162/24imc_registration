@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-5 text-center">Registration List</h2>
<h5 style="text-align: justify" class="container mb-5">
    <li>
        Please verify that your registration appears in the list below. 
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
