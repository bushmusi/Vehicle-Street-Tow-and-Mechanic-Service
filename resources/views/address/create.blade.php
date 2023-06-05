@extends('layouts.app')
@section('content')
<div class="container-fluid bg-white mt-5">
    <h1>Create Address</h1>
    <form action="/address" method="POST" class="ml-3">
        @csrf
        <div class="mb-3 mt-3" style="width: 70%">
            <label for="SubCity" class="form-label">SubCity:</label>
            <input type="text" class="form-control" id="SubCity" placeholder="Enter SubCity" name="subcity">
        </div>
        <div class="mb-3 mt-3" style="width: 70%">
            <label for="Woreda" class="form-label">Woreda:</label>
            <input type="number" class="form-control" id="Woreda" placeholder="Enter Woreda" name="woreda">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection