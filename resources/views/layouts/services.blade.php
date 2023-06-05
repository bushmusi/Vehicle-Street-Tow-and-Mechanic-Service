{{-- generate container box with background white in a list tag right side image and left side description about the service --}}
<div class="container-fluid bg-white">
    <h1 class='dispaly-1 text-center mt-5' style="font-weight: bold">Our Services</h1>
    <div class="row">
        <p style="font-weight: 400;" class="text-center">We take pride in delivering transparent and honest service. Before starting any repair work,
             our mechanics will thoroughly inspect your vehicle, identify the issues, and provide you with a detailed explanation of the
              required repairs along with an estimate of the costs involved. We believe in
             clear communication and will keep you informed throughout the repair process, addressing any concerns or questions you may have.</p>
    </div>
    <div class="row d-flex justify-content-space-between mt-3">
        <div class="col-md-4 d-flex flex-column align-items-center">
            <div class="partner-card">
                <img src="{{ asset('image/tow-service.jpg') }}" class="img-fluid rounded" alt="Los Angeles" class="d-block" style="width: 300px; height: 200px">
            </div>
            <h3 class="text-center" style="font-weight: bold">Emergency Towing</h3>
            <p class="text-center">Our team of experienced and skilled tow truck operators is equipped with state-of-the-art towing equipment to handle vehicles of all sizes, from cars and motorcycles to vans and trucks.</p>
        </div>
        <div class="col-md-4 d-flex flex-column align-items-center">
            <div style="partner-card">
                <img src="{{ asset('image/mechanic-service.jpg') }}" class="img-fluid rounded" alt="Los Angeles" class="d-block" style="width: 300px; height: 200px">
            </div>   
            <h3 class="text-center" style="font-weight: bold">Mechanic Service</h3>
            <p class="text-center">At our Mechanic Service, customer satisfaction is our top priority. We strive to provide exceptional service, timely repairs, and competitive pricing.</p>
        </div>
        <div class="col-md-4 d-flex flex-column align-items-center">
            <div>
                <img src="{{ asset('image/machanic-street.jpg') }}" class="img-fluid rounded" alt="Los Angeles" class="d-block" style="width: 300px; height: 200px">
            </div>
            <h3 class="text-center" style="font-weight: bold">Street Maintainace</h3>
            <p class="text-center">Our Mechanic Service is your trusted partner for all your automotive repair and maintenance needs. We understand that your vehicle is an essential part of your daily life</p>
        </div>
    </div>
    @include('layouts/our-core-values')
    @include('layouts/our-partners')
    @include('layouts/about-us')

</div>