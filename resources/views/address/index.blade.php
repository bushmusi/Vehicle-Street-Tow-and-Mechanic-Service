@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Address List</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Subcity</th>
                        <th>Woreda</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($addresses as $address)
                    <tr>
                        <td>{{ $address->id }}</td>
                        <td>{{ $address->subcity }}</td>
                        <td>{{ $address->woreda }}</td>
                        <td>{{ $address->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('address.create') }}" class="btn btn-primary">Add Address</a>
        </div>
    </div>
@endsection