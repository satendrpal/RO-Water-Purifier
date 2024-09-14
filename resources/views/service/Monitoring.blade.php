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
            <h2 class="text-start">RO Water System Monitoring</h2>
            <ul>
                <li><a href="{{route('index')}}"><i class="bi bi-house-door"></i> Home</a></li>
                <li><a href="{{route('service.filtter')}}"><i class="bi bi-chevron-double-right pe-2"></i> Service</li></a>
                <li><i class="bi bi-chevron-double-right pe-2"></i> Monitor Water Quality</li>
            </ul>
        </div>
    </div>
</div>

<!-- Service Details Section -->
<div class="service-container container-fluid">
    <div class="container-xl">
        <div class="section-title row">
            <h2>Our RO Water Quality Monitoring Service</h2>
            <p>Ensure the quality of your water with our advanced monitoring services for your RO system.</p>
        </div>
        
        <!-- Service Details -->
        <div class="row service-details">
            <div class="col-lg-6">
                <img src="{{url('assets/images/service/se5.webp')}}" alt="RO Service">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bolder">Why Choose Our Water Quality Monitoring?</h2>
                <ul>
                    <li><i class="bi bi-check-circle"></i> Real-time monitoring of water quality parameters</li>
                    <li><i class="bi bi-check-circle"></i> Regular data analysis and reporting</li>
                    <li><i class="bi bi-check-circle"></i> Early detection of potential issues and contaminants</li>
                    <li><i class="bi bi-check-circle"></i> Ensures compliance with health and safety standards</li>
                </ul>
            </div>
        </div>
        
        <!-- Water Quality Monitoring Section -->
        <div class="row water-quality-monitoring">
            <div class="col-lg-12">
                <h3>Monitor Water Quality</h3>
                <p>Monitoring the quality of your RO system's output water is crucial for ensuring safe and clean water for consumption. Here’s why water quality monitoring is essential:</p>
                <ul>
                    <li><i class="bi bi-check-circle"></i> Detects contaminants and ensures water safety</li>
                    <li><i class="bi bi-check-circle"></i> Provides insights into system performance and efficiency</li>
                    <li><i class="bi bi-check-circle"></i> Helps in maintaining the system to avoid costly repairs</li>
                </ul>
                <p>Our water quality monitoring service includes the installation of advanced sensors that continuously track various water quality parameters such as pH, TDS (Total Dissolved Solids), and microbial contamination. You will receive detailed reports and alerts on any deviations from the norm, ensuring that you can address potential issues promptly.</p>
            </div>
        </div>

        <!-- Pricing Section -->
        <div class="row pricing">
            <div class="col-lg-12">
                <h3>Pricing Information</h3>
                <p>Our pricing for water quality monitoring services depends on the specifics of your system and the level of monitoring required. Contact us for a customized quote based on your needs.</p>
                <p>We offer competitive rates and comprehensive packages. Discounts are available for long-term monitoring agreements.</p>
            </div>
        </div>
        
        <!-- Testimonials Section -->
        <div class="row testimonials">
            <div class="col-lg-12">
                <h3>What Our Customers Say</h3>
                <blockquote>
                    <p>"The water quality monitoring service is top-notch. We feel secure knowing our water is being continuously monitored." - Emily R.</p>
                </blockquote>
                <blockquote>
                    <p>"Excellent service and very detailed reports. Great for maintaining our RO system’s efficiency." - Michael T.</p>
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
