<!-- bookings.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container bg-white">
        <h1>All Requests</h1>

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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
