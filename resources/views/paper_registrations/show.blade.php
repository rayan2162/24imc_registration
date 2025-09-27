@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Paper Registration #{{ $paper_registration->id }}</h3>

    <a href="{{ route('paper-registrations.index') }}" class="btn btn-secondary mb-3">Back to list</a>

    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $paper_registration->full_name }}</p>
            <p><strong>Email:</strong> {{ $paper_registration->email }}</p>
            <p><strong>Paper Title:</strong> {{ $paper_registration->paper_title }}</p>
            <p><strong>Paper ID:</strong> {{ $paper_registration->paper_id_no }}</p>
            <p><strong>Presentation:</strong> {{ $paper_registration->presentation_type }}</p>

            <p><strong>Author Photo:</strong><br>
                <img src="{{ asset('storage/' . $paper_registration->authors_photograph) }}" style="max-width:200px;" alt="photo">
                <br>
                <a href="{{ asset('storage/' . $paper_registration->authors_photograph) }}" download class="btn btn-primary mt-2">Download Photo</a>
            </p>
            
            @if($paper_registration->student_id_card)
            <p><strong>Student ID:</strong><br>
                <img src="{{ asset('storage/' . $paper_registration->student_id_card) }}" style="max-width:200px;" alt="student id">
                <a href="{{ asset('storage/' . $paper_registration->student_id_card) }}" download class="btn btn-primary mt-2">Download Student ID Card</a>
            </p>
            @endif

            <p><strong>Manuscript:</strong>
                <a href="{{ asset('storage/' . $paper_registration->manuscript) }}" target="_blank">Download</a>
            </p>

            <p><strong>Proof of Payment:</strong>
                <a href="{{ asset('storage/' . $paper_registration->proof_of_payment) }}" target="_blank">Download</a>
            </p>
        </div>
    </div>
</div>
@endsection
