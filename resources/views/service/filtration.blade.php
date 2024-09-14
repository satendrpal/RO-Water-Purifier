@extends('main.app')
@section('contents')
<style>
    /* Header Image Styles */
    #image {
        background-image: url('/assets/images/service/header/h1.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
        padding: 200px 100px;
        color: white;
        background-size: 100% 100%;
    }

    /* Media Queries for Responsive Design */
    @media (max-width: 768px) {
        #image {
            padding: 70px 0;
            font-size: 1.2rem; /* Adjust font size for smaller screens */
        }

        .image_size {
            width: 100%; /* Ensure image fits within container */
            height: 50%; /* Maintain aspect ratio */

        }
    }

   
   /* Base styles for images */
.image_size {
    transition: transform 0.3s ease; /* Smooth transition for zoom effect */
    height: auto; /* Maintain aspect ratio */
    border-radius: 8px; /* Rounded corners for images */
    overflow: hidden; /* Hides overflow if needed */
    max-width: 100%; /* Ensure image fits within its container */
    max-height: 400px; /* Maximum height of images */
    min-width: 200px; /* Minimum width of images */
    min-height: 150px; /* Minimum height of images */
}

/* Hover effect for images */
.image_size:hover {
    transform: scale(1.1); /* Scale image by 10% */
}

/* Container styling */
.image-container {
    overflow: hidden; /* Hide overflow to prevent scrollbars */
    position: relative; /* Ensure the container is positioned correctly */
}

/* Additional styling */
.container-fluid {
    background-color: #f9f9f9; /* Background color for the service section */
}

.big-padding {
    padding: 40px 0; /* Padding for the service section */
}

.bg-gray {
    background-color: #f0f0f0; /* Light gray background */
}

/* Media queries for responsiveness */

/* Small devices (phones, 576px and down) */
@media (max-width: 576px) {
    .image_size {
        max-width: 100%; /* Ensure image takes full width on small screens */
        max-height: 200px; /* Reduce max height on smaller screens */
    }

    .big-padding {
        padding: 20px 0; /* Reduce padding on smaller screens */
    }
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) and (max-width: 1200px) {
    .image_size {
        max-width: 100%; /* Ensure image fits within container */
        max-height: 350px; /* Adjust max height for medium devices */
        min-width: 150px; /* Reduce minimum width */
        min-height: 100px; /* Reduce minimum height */
    }

    .big-padding {
        padding: 30px 0; /* Adjust padding for medium devices */
    }
}

/* Large devices (desktops, 1200px and up) */
@media (min-width: 1200px) {
    .image_size {
        max-width: 600px; /* Maximum width of images */
        max-height: 400px; /* Maximum height of images */
        min-width: 200px; /* Minimum width of images */
        min-height: 150px; /* Minimum height of images */
    }

    .big-padding {
        padding: 40px 0; /* Default padding for large screens */
    }
}

</style>

<!-- Page Navigation -->
<div class="page-nav no-margin row" id="image">
    <div class="container">
        <div class="row">
            <h2 class="text-start">Our Services</h2>
            <ul>
                <li><a href="#"><i class="bi bi-house-door"></i> Home</a></li>
                <li><i class="bi bi-chevron-double-right pe-2"></i> Services</li>
            </ul>
        </div>
    </div>
</div>

<!-- Service Section -->
<div class="container-fluid big-padding bg-gray">
    <div class="container-xl">
        <div class="row">
            <!-- Example Chart Image 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="image-container">
                    <a href="{{route('service.maint')}}">
                        <img class="rounded shadow mb-3 image_size" src="{{url('assets/images/service/se4.webp')}}" alt="Maintenance">
                        <h6 class="fw-bolder fs-5 py-2">Maintenance</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque condimentum nisl ac lacus rutrum aliquam. Duis scelerisque feugiat nisl, et dictum felis congue non.</p>
                        <span class="float-start fw-bold fs-8"> Learn More <i class="bi bi-arrow-right"></i></span>
                    </a>
                    
                </div>
            </div>
            <!-- Example Chart Image 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="image-container">
                   <a href="{{route('service.Sanitization')}}"> <img class="rounded shadow mb-3 image_size" src="{{url('assets/images/service/se6.webp')}}" alt="Filters & Exhaust">
                    <h6 class="fw-bolder fs-5 py-2">Sanitization</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque condimentum nisl ac lacus rutrum aliquam. Duis scelerisque feugiat nisl, et dictum felis congue non.</p>
                     <span class="float-start fw-bold fs-8"> Learn More <i class="bi bi-arrow-right"></i></span>
                   </a>
                </div>
            </div>
            <!-- Additional Chart Images -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="image-container">
                <a href="{{route('service.monitoring')}}">  <img class="rounded shadow mb-3 image_size" src="{{url('assets/images/service/se5.webp')}}" alt="Maintenance">
                    <h6 class="fw-bolder fs-5 py-2">Monitor Water Quality</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque condimentum nisl ac lacus rutrum aliquam. Duis scelerisque feugiat nisl, et dictum felis congue non.</p>
                     <span class="float-start fw-bold fs-8"> Learn More <i class="bi bi-arrow-right"></i></span>
                </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="image-container">
                    <img class="rounded shadow mb-3 image_size" src="{{url('assets/images/service/se4.webp')}}" alt="Auto Diagnostics">
                    <h6 class="fw-bolder fs-5 py-2">Auto Diagnostics</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque condimentum nisl ac lacus rutrum aliquam. Duis scelerisque feugiat nisl, et dictum felis congue non.</p>
                     <span class="float-start fw-bold fs-8"> Learn More <i class="bi bi-arrow-right"></i></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="image-container">
                    <img class="rounded shadow mb-3 image_size" src="{{url('assets/images/service/se3.webp')}}" alt="Maintenance">
                    <h6 class="fw-bolder fs-5 py-2">Maintenance</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque condimentum nisl ac lacus rutrum aliquam. Duis scelerisque feugiat nisl, et dictum felis congue non.</p>
                     <span class="float-start fw-bold fs-8"> Learn More <i class="bi bi-arrow-right"></i></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="image-container">
                    <img class="rounded shadow mb-3 image_size" src="{{url('assets/images/service/se3.webp')}}" alt="Purchase Inspection">
                    <h6 class="fw-bolder fs-5 py-2">Purchase Inspection</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque condimentum nisl ac lacus rutrum aliquam. Duis scelerisque feugiat nisl, et dictum felis congue non.</p>
                     <span class="float-start fw-bold fs-8"> Learn More <i class="bi bi-arrow-right"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
