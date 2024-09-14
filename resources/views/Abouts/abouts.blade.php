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
<div class="page-nav no-margin row" id="image">
                <div class="container">
                    <div class="row">
                        <h2 class="text-start">About Us</h2>
                        <ul>
                            <li> <a href="{{route('index')}}"><i class="bi bi-house-door"></i> Home</a></li>
                            <li><i class="bi bi-chevron-double-right pe-2"></i> About Us</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="about-container container-fluid bg-white big-padding">
                <div class="container-xl">
                   <div class="section-title row">
                        <h2 class="mb-3">About Us</h2>
                        <p>Sed rhoncus facilisis diam sed pharetra. Ut in sollicitudin nulla, nec bibendum velit. Duis porta lorem ac urna feugiat, ut vestibulum massa sodales.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <img class="mb-2" src="{{url('assets/images/img-about-1.jpg')}}" alt="">
                        </div>
                        <div class="col-lg-7">
                            <h2 class="fw-bolder">We’re Committed To AutoRepair Meets The Quality Standards</h2>
                            <ul>
                                <li class="fs-6 p-2"><i class="bi bi-check-circle"></i> Pellentesque nec tincidunt mauris. Class aptent taciti sociosqu</li>
                                <li class="fs-6 p-2"><i class="bi bi-check-circle"></i> Nullam quis urna enim. Vivamus tincidunt, elit sed finibus sollicitudin</li>
                                <li class="fs-6 p-2"><i class="bi bi-check-circle"></i> Pellentesque nec tincidunt mauris. Class aptent taciti sociosqu</li>
                                <li class="fs-6 p-2"><i class="bi bi-check-circle"></i> facilisis ex lectus id lectus. Nam eget nulla fermentum, fermentum nulla vel, iaculis</li>
                                <li class="fs-6 p-2"><i class="bi bi-check-circle"></i> Pellentesque nec tincidunt mauris. Class aptent taciti sociosqu</li>
                                <li class="fs-6 p-2"><i class="bi bi-check-circle"></i> Nullam quis urna enim. Vivamus tincidunt, elit sed finibus sollicitudin</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-4">
                            <img class="w-100 mb-2" src="{{url('assets/images/img-about-3.jpg')}}" alt="">
                        </div>
                        <div class="col-lg-8">
                            <p class="mb-3">Sed nec condimentum justo. Nulla erat urna, lobortis sed risus eget, dapibus tempus enim. Etiam id elit dolor. Phasellus porta nisi sit amet feugiat rutrum. Praesent turpis nisl, elementum a finibus vel, pulvinar vitae lectus. Vestibulum hendrerit arcu a arcu laoreet, quis tempor dui sagittis.  luctus et ultrices posuere cubilia curae; Vestibulum fringilla vel risus quis ultricies. Ut eu dapibus elit. Donec consectetur mi ut commodo consectetur. Morbi dignissim interdum lectus, molestie hendrerit magna vehicula a. Morbi aliquet, ligula sit amet sollicitudin porta, ex nulla fringilla purus, vulputate pellentesque nisi ante vel lacus.</p>
                            <p>Etiam placerat nisl gravida, fermentum odio eget, lacinia tellus. Donec finibus, libero a pellentesque pretium, quam sapien faucibus diam, quis faucibus risus ex ac magna. Nullam sit amet urna vel est convallis luctus non ut nunc. ante dapibus aliquet. Nam mauris dolor, scelerisque ac lobortis id, cursus ut augue. Nulla ultricies id turpis ac lobortis. Vivamus sed porta risus. Morbi porttitor velit sed cursus iaculis. Nulla interdum tincidunt eleifend.</p>
                        </div>
                    </div>
                </div>

            </div>
@endsection    