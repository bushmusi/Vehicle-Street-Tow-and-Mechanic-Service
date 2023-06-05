@extends('layouts.app')
@section('content')
<div class="container p-5 my-2 border bg-white">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/tow.jpg') }}" alt="Los Angeles" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h2 style="font-weight: bold">Emergency Towing</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/mechanic.jpg') }}" alt="Los Angeles" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h2 style="font-weight: bold">Best Mechanic</h2>
                    <h5 style="font-weight: bold">We provide the best mechanic services. Call us now at 012-3456789</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/machanic-street.jpg') }}" alt="Los Angeles" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h2 style="font-weight: bold">Fast and Quality Fix</h2>
                    <h5 style="font-weight: bold;">We provide fast and quality fix services. Call us now at 012-3456789</h5>
                </div>
            </div>
            </div>
            
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        @include('layouts/services')
</div>
@endsection
