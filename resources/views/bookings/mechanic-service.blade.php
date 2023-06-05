<!-- bookings.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container bg-white">
        <h1>Mechanic Request</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Problem Description</th>
                    <th>Issue Type</th>
                    <th>Current Address</th>
                    <th>Status</th>
                    <th>Fixer</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->user->name }}</td>
                        <td>{{ $booking->problem_description }}</td>
                        <td>{{ $booking->issue_type }}</td>
                        <td>{{ $booking->address->subcity }} - {{ $booking->address->woreda }}</td>
                        <td>{{ $booking->status ? 'Completed' : 'Pending' }}</td>
                        <td>{{ $booking->fixer ? $booking->fixer->name : 'N/A' }}</td>
                        <td>
                            @if (!$booking->status)
                            <form action="{{ route('bookings.update-status', $booking) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-primary">Accept</button>
                            </form>
                            @endif
                            @if ($booking->status)
                                <form action="{{ route('bookings.update-status', $booking) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-secondary" disabled>Accepted</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
