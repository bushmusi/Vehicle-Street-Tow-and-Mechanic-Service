@extends('layouts.app')

@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-12 mb-3">
                <h1>User List</h1>
            
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    @if ($user->address)
                                        {{ $user->address->subcity }}, Woreda {{ $user->address->woreda }}
                                    @else
                                        No address available
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
