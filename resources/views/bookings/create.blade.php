<!-- bookings/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create Requests</h1>
    <div class="container bg-white">
        <div class="row justify-content-start ml-4 mt-4">
            <div class="col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('bookings.store') }}">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="problem_description">Problem Description:</label>
                        <textarea class="form-control" id="problem_description" name="problem_description" rows="4"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="issue_type">Issue Type:</label>
                        <select class="form-control" id="issue_type" name="issue_type">
                            <option value="tow">Tow</option>
                            <option value="mechanic">Mechanic</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="address_id">Address:</label>
                        <select class="form-control" id="address_id" name="address_id">
                            @foreach ($addresses as $address)
                                <option value="{{ $address->id }}">{{ $address->subcity }}, Woreda {{ $address->woreda }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mb-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
