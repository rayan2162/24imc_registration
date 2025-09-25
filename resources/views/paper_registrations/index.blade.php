@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Paper Registrations</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Full name</th>
                <th>Email</th>
                <th>Paper ID</th>
                <th>Title</th>
                <th>Presenter</th>
                <th>Payment</th>
                <th>Approved</th>
                <th>Submitted</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($papers as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->full_name }}</td>
                <td>
                    <a style="color: black" href="mailto:{{ $p->email }}">{{ $p->email }}</a>
                </td>
                <td>{{ $p->paper_id_no }}</td>
                <td style="max-width:200px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">{{ $p->paper_title }}</td>
                <td>{{ $p->presenter_full_name }}</td>
                <td>{{ ucfirst($p->payment_method) }}@if($p->tracking_number) ({{ $p->tracking_number }}) @endif</td>
                <td>
                    @if($p->is_approved)
                        <span class="badge bg-success">Yes</span>
                    @else
                        <span class="badge bg-secondary">No</span>
                    @endif
                </td>
                <td>{{ $p->created_at->format('Y-m-d') }}</td>
                <td>
                    <a href="{{ route('paper-registrations.show', $p) }}" class="btn btn-sm btn-outline-primary">View</a>

                    <!-- Approve form (protect this action with admin middleware) -->
                    <form action="{{ route('paper-registrations.approve', $p) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-sm btn-{{ $p->is_approved ? 'warning' : 'success' }}" type="submit">
                            {{ $p->is_approved ? 'Unapprove' : 'Approve' }}
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $papers->links() }}
</div>
@endsection
