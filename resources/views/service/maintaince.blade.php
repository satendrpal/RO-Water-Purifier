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
    @media (max-width: 768px) {
    #image {
        padding: 40px 0;
        font-size: 1.2rem; /* Adjust font size for smaller screens */
    }
    .mb-4 {
    margin-bottom: -6.5rem !important;
}
}
</style>

<!-- Header Section -->
<div class="page-nav no-margin row" id="image">
    <div class="container">
        <div class="row">
            <h2 class="text-start">RO Water Maintenance Services</h2>
            <ul>
                <li><a href="{{route('index')}}"><i class="bi bi-house-door"></i> Home</a></li>
                <li><a href="{{route('service.filtter')}}"><i class="bi bi-chevron-double-right pe-2"></i> Service</li></a>
                <li><i class="bi bi-chevron-double-right pe-2"></i> RO Water Maintenance Services</li>
            </ul>
        </div>
    </div>
</div>

<!-- Service Details Section -->
<div class="service-container container-fluid">
    <div class="container-xl">
        <div class="section-title row">
            <h2>Our RO Water Maintenance Services</h2>
            <p>Ensure your RO water system operates at peak efficiency with our comprehensive maintenance services.</p>
        </div>
        
        <!-- Service Details -->
        <div class="row service-details">
            <div class="col-lg-6">
                <img src="{{url('assets/images/service/se5.webp')}}" alt="RO Service">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Why Choose Our RO Maintenance Services?</h2>
                <ul>
                    <li><i class="bi bi-check-circle"></i> Regular filter replacements and system checks</li>
                    <li><i class="bi bi-check-circle"></i> Emergency repairs and troubleshooting</li>
                    <li><i class="bi bi-check-circle"></i> Expert installation and system upgrades</li>
                    <li><i class="bi bi-check-circle"></i> Extended system lifespan and improved water quality</li>
                </ul>
            </div>
        </div>
        
        <!-- Pricing Section -->
        <div class="row pricing">
            <div class="col-lg-12">
                <h3>Pricing Information</h3>
                <p>Our pricing varies based on the service needed. Contact us for a detailed quote tailored to your specific requirements.</p>
                <p>We offer competitive rates for routine maintenance and emergency repairs. Discounts available for regular service plans.</p>
            </div>
        </div>
        
        <!-- Testimonials Section -->
        <div class="row testimonials">
            <div class="col-lg-12">
                <h3>What Our Customers Say</h3>
                <blockquote>
                    <p>"The service was excellent and timely. Our RO system is running better than ever!" - Jane D.</p>
                </blockquote>
                <blockquote>
                    <p>"Highly recommend their maintenance services. Professional and thorough." - John S.</p>
                </blockquote>
            </div>
        </div>
        
        <!-- Contact Information Section -->
        <div class="row contact-info">
            <div class="col-lg-12">
                <h3>Contact Us for More Information</h3>
                <p>If you have any questions or need to schedule a service, please don't hesitate to contact us.</p>
                <p>Email: <a href="mailto:info@roservice.com">info@roservice.com</a></p>
                <p>Phone: +123 456 7890</p>
                <p>Address: 123 Water Lane, Clean City, CA 12345</p>
            </div>
        </div>
    </div>
</div>

@endsection
