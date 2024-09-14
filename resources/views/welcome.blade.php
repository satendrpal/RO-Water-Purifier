@extends('main.app')
@section('contents')
<style>
    .float-start{
        position: relative;
         
    }
    </style>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item " style="background-image: url('assets/images/slider/h1.jpg')">
                 <div class="bg-fade">
                      <div class="carousel-caption d-none d-md-block">
                        <h1 class="fs-11 mb-4 text-white fw-bolder">We’re Leaders in Auto Repair, Maintenance & Inspection</h5>
                        <p class="fs-6 col-md-10 mx-auto fw-bolder">Kiusmod tempor incididunt ut labore sed dolore magnas aliquay enim ad minim veniam quis nostrud exercitation ullamco laboris nisut aliquip ex sed ipsum ea reprehen deritin voluptate.</p>
                          <div class="btn-cover pt-5">
                              <button class="btn fw-bolder px-5 py-3 fs-5 btn-light">Learn More</button>
                              <button class="btn px-5 fw-bolder py-3 fs-5 ms-4 btn-primary">Request Callback</button>
                          </div>
                      </div>
                      
                 </div>
            </div>
            <div class="carousel-item active" style="background-image: url('assets/images/slider/h2.png')">
                <div class="bg-fade">
                  <div class="carousel-caption d-none d-md-block">
                        <h1 class="fs-11 mb-4 text-white fw-bolder">We’re Leaders in Auto Repair, Maintenance & Inspection</h5>
                        <p class="fs-6 col-md-10 mx-auto fw-bolder">Kiusmod tempor incididunt ut labore sed dolore magnas aliquay enim ad minim veniam quis nostrud exercitation ullamco laboris nisut aliquip ex sed ipsum ea reprehen deritin voluptate.</p>
                          <div class="btn-cover pt-5">
                              <button class="btn fw-bolder px-5 py-3 fs-5 btn-light">Learn More</button>
                              <button class="btn px-5 fw-bolder py-3 fs-5 ms-4 btn-primary">Request Callback</button>
                          </div>
                      </div>
                </div>
            </div>
            
            
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        
        <!----########## Why Choose Us Starts Here #######---->
        
        
        <div class="container-fluid products bg-gray big-padding pt-3">
            <div class="container-xl">
                <div class="section-title row">
                    <h2 class="mb-3">Why Choose Us?</h2>
                    <p>Sed rhoncus facilisis diam sed pharetra. Ut in sollicitudin nulla, nec bibendum velit. Duis porta lorem ac urna feugiat, ut vestibulum massa sodales.</p>
                </div>
                <section id="why-choose-us">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-4 mb-4">
                        <div class="card text-center shadow-md p-4 rounded-4 border-0">
                          <div class="card-body">
                           <img class="mb-4 max-30" src="assets/images/leader.png" alt="">
                            <h5 class="card-title fw-bolder">Expert Team</h5>
                            <p class="card-text">Our team consists of highly skilled professionals with years of experience in their respective fields.   to the elements.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 mb-4">
                        <div class="card text-center shadow-md p-4 rounded-4 border-0">
                          <div class="card-body">
                           <img class="mb-4 max-30" src="assets/images/badge.png" alt="">
                            <h5 class="card-title fw-bolder">Quality Work</h5>
                            <p class="card-text">We are committed to providing high-quality services and products that exceed our customers' expectations.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 mb-4">
                        <div class="card text-center shadow-md p-4 rounded-4 border-0">
                          <div class="card-body">
                           <img class="mb-4 max-30" src="assets/images/customer-support.png" alt="">
                            <h5 class="card-title fw-bolder">Customer Service</h5>
                            <p class="card-text">Our dedicated customer service team is always available to assist you with any questions or concerns you may have.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>

            </div>
        </div>
        
        <!----########## About Us Starts Here #######---->
        
        <div class="about-container container-fluid bg-white big-padding">
            <div class="container-xl">
               <div class="section-title row">
                    <h2 class="mb-3">About Us</h2>
                    <p>Sed rhoncus facilisis diam sed pharetra. Ut in sollicitudin nulla, nec bibendum velit. Duis porta lorem ac urna feugiat, ut vestibulum massa sodales.</p>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <img class="mb-2" src="assets/images/sp1.jpg" alt="">
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
                        <img class="w-100 mb-2" src="assets/images/sp2.jpg" alt="">
                    </div>
                    <div class="col-lg-8">
                        <p class="mb-3">Sed nec condimentum justo. Nulla erat urna, lobortis sed risus eget, dapibus tempus enim. Etiam id elit dolor. Phasellus porta nisi sit amet feugiat rutrum. Praesent turpis nisl, elementum a finibus vel, pulvinar vitae lectus. Vestibulum hendrerit arcu a arcu laoreet, quis tempor dui sagittis.  luctus et ultrices posuere cubilia curae; Vestibulum fringilla vel risus quis ultricies. Ut eu dapibus elit. Donec consectetur mi ut commodo consectetur. Morbi dignissim interdum lectus, molestie hendrerit magna vehicula a. Morbi aliquet, ligula sit amet sollicitudin porta, ex nulla fringilla purus, vulputate pellentesque nisi ante vel lacus.</p>
                        <p>Etiam placerat nisl gravida, fermentum odio eget, lacinia tellus. Donec finibus, libero a pellentesque pretium, quam sapien faucibus diam, quis faucibus risus ex ac magna. Nullam sit amet urna vel est convallis luctus non ut nunc. ante dapibus aliquet. Nam mauris dolor, scelerisque ac lobortis id, cursus ut augue. Nulla ultricies id turpis ac lobortis. Vivamus sed porta risus. Morbi porttitor velit sed cursus iaculis. Nulla interdum tincidunt eleifend.</p>
                    </div>
                </div>
            </div>
                
        </div>
        
        
        <!----########## Easy Steps Starts Here #######---->
        
        <div class="steps container-fluid big-padding">
            <div class="container-xl">
                <div class="section-title row">
                    <h2 class="mb-3">Get Car Ready In Easy Steps</h2>
                    <p>Book An Appointment With Easy Steps.</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-3 text-center">
                        <div class="">
                            <h1 class=" mx-auto fw-bolder p-3 dkijiu shadow-md text-center">1</h1>
                            <h4 class="fw-bolder mt-4 mb-2">Get a Free Quote</h4>
                            <p>Best thing about Antek is to earn some  extra revenue on their equipments.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3 text-center">
                        <div class="">
                            <h1 class=" mx-auto fw-bolder p-3 dkijiu shadow-md text-center">2</h1>
                            <h4 class="fw-bolder mt-4 mb-2">Book Car Inspection</h4>
                            <p>Best thing about Antek is to earn some  extra revenue on their equipments.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3 text-center">
                        <div class="">
                            <h1 class=" mx-auto fw-bolder p-3 dkijiu shadow-md text-center">3</h1>
                            <h4 class="fw-bolder mt-4 mb-2">Get Your Car Fixed</h4>
                            <p>Best thing about Antek is to earn some  extra revenue on their equipments.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3 text-center">
                        <div class="">
                            <h1 class=" mx-auto fw-bolder p-3 dkijiu shadow-md text-center">4</h1>
                            <h4 class="fw-bolder mt-4 mb-2">Happy Motoring</h4>
                            <p>Best thing about Antek is to earn some  extra revenue on their equipments.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!----########## Types of Car Us Starts Here #######---->
        
        <div class="steps bg-white container-fluid big-padding">
            <div class="container-xl">
                <div class="section-title row">
                    <h2 class="mb-3">Service</h2>
                    <p>Etiam placerat nisl gravida, fermentum odio eget, lacinia tellus. Donec finibus, libero a pellentesque pretium, quam sapien faucibus diam</p>
                
                </div>
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        <div  class="item text-center p-3">
                          <div class="bg-gray p-3 service_size">
                          <img class="rounded shadow mb-3" src="{{url('assets/images/service/se4.webp')}}" alt="">
                            <h6 class="fw-bolder fs-5 py-2">Installation</h6>
                            <p>Our technicians are factory trained to install water purifiers for effective functioning.</p>
                         <span class="float-start fw-bold fs-8"> Learn More <i class="bi bi-arrow-right"></i></span>  
                        </div>
                        </div>
                        
                        <div class="item text-center p-3">
                          <div class="bg-gray p-3 service_size">
                          <img class="rounded shadow mb-3" src="{{url('assets/images/service/se3.webp')}}" alt="">
                            <h6 class="fw-bolder fs-5 py-2">Maintenance</h6>
                            <p>We are the best when it comes to providing maintenance to water purifiers for safe and smooth run.</p>
                            <span class="float-start fw-bold fs-8"> Learn More <i class="bi bi-arrow-right"></i></span>  
                        </div>
                        </div>
                        
                        <div class="item text-center p-3">
                          <div class="bg-gray p-3 service_size">
                          <img class="rounded shadow mb-3" src="{{url('assets/images/service/se6.webp')}}" alt="">
                            <h6 class="fw-bolder fs-5 py-2">Reparation</h6>
                            <p>We are the best when it comes to repair and provide hassle free service for water purifiers.</p>
                            <span class="float-start fw-bold fs-8"> Learn More <i class="bi bi-arrow-right"></i></span>   
                        </div>
                        </div>
                        
                        <div class="item text-center p-3">
                          <div class="bg-gray p-3 service_size">
                          <img class="rounded shadow mb-3" src="{{url('assets/images/service/se4.webp')}}" alt="">
                          <h6 class="fw-bolder fs-5 py-2">Maintenance</h6>
                          <p>We are the best when it comes to providing maintenance to water purifiers for safe and smooth run.</p>
                          <span class="float-start fw-bold fs-8"> Learn More <i class="bi bi-arrow-right"></i></span> 
                        </div>
                        </div>
                        
                        <div class="item text-center p-3">
                          <div class="bg-gray p-3 service_size">
                          <img class="rounded shadow mb-3" src="{{url('assets/images/service/se5.webp')}}" alt="">
                          <h6 class="fw-bolder fs-5 py-2">Maintenance</h6>
                          <p>We are the best when it comes to providing maintenance to water purifiers for safe and smooth run.</p></div>
                          <span class="float-start fw-bold fs-8"> Learn More <i class="bi bi-arrow-right"></i></span> 
                        </div>
                        
                        <div class="item text-center p-3">
                          <div class="bg-gray p-3 service_size">
                          <img class="rounded shadow mb-3" src="{{url('assets/images/service/se3.webp')}}" alt="">
                          <h6 class="fw-bolder fs-5 py-2">Maintenance</h6>
                          <p>We are the best when it comes to providing maintenance to water purifiers for safe and smooth run.</p>
                          <span class="float-start fw-bold fs-8"> Learn More <i class="bi bi-arrow-right"></i></span> 
                        
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
         <!--  ************************* Testimonial Start Here ************************** --> 

        <div id="testimonial" class="service bg-honey container-fluid px-4 py-5">
            <div class="container">
                <div class="section-title row mb-3">
                    <h2 class="fw-bolder">Testimonial</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum sit nibh amet egestas tellus.</p>

                </div>
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="serv-cove shadow-md rounded bg-white p-3">
                            <div class="prf row mb-3">
                                <div class="col-3">
                                    <img class="rounded-pill" src="assets/images/testimonial/member-01.jpg" alt="">
                                </div>
                                <div class="col-9 align-self-center">
                                    <h6 class="mb-0 fw-bolder">Vinoth Parkash</h6>
                                    <span>CEO Fabric Nation</span>
                                </div>
                            </div>
                            <div class="det text-center">
                                <p class="fs-7 fst-italic">Sed lectus ante, pharetra in lacus sed, efficitur luctus elit. Suspendisse commodo felis dictum, tempor tortor a, dapibus tellus. Nam ornare felis ut arcu tristique luctus. Curabitur </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="serv-cove shadow-md rounded bg-white p-3">
                            <div class="prf row mb-3">
                                <div class="col-3">
                                    <img class="rounded-pill" src="assets/images/testimonial/member-03.jpg" alt="">
                                </div>
                                <div class="col-9 align-self-center">
                                    <h6 class="mb-0 fw-bolder">Jackson Daniel</h6>
                                    <span>CEO Notitech</span>
                                </div>
                            </div>
                            <div class="det text-center">
                                <p class="fs-7 fst-italic">Sed lectus ante, pharetra in lacus sed, efficitur luctus elit. Suspendisse commodo felis dictum, tempor tortor a, dapibus tellus. Nam ornare felis ut arcu tristique luctus. Curabitur </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="serv-cove shadow-md rounded bg-white p-3">
                            <div class="prf row mb-3">
                                <div class="col-3">
                                    <img class="rounded-pill" src="assets/images/testimonial/member-02.jpg" alt="">
                                </div>
                                <div class="col-9 align-self-center">
                                    <h6 class="mb-0 fw-bolder">Praveen Thaney</h6>
                                    <span>Admin Vintech</span>
                                </div>
                            </div>
                            <div class="det text-center">
                                <p class="fs-7 fst-italic">Sed lectus ante, pharetra in lacus sed, efficitur luctus elit. Suspendisse commodo felis dictum, tempor tortor a, dapibus tellus. Nam ornare felis ut arcu tristique luctus. Curabitur </p>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
             </div>
        </div>
        
        <!-- ################## Our Blog #################### -->
<!--            
        <div id="blog" class="service container-fluid px-4 bg-white py-5">
            <div class="container">
               <div class="section-title row mb-3">
                    <h2 class="fw-bolder">Our Blog</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum sit nibh amet egestas tellus.</p>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-6 mb-4">
                       <div class="serv-cove rounded bg-white p-2">
                            <img src="assets/images/blog/img-article-intro-4.jpg" alt="">
                            <div class="p-2">
                                <h5 class="mt-3 fs-7 fw-bold">Top 10 Trends in  Webdesign sit nibh amet  Mauris ipsum sit nibh</h5>
                                <span class="float-start fw-bold fs-8"> Learn More <i class="bi bi-arrow-right"></i></span>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                       <div class="serv-cove rounded bg-white p-2">
                            <img src="assets/images/blog/post-holder-image-1-min.jpg" alt="">
                            <div class="p-2">
                                <h5 class="mt-3 fs-7 fw-bold">Top 10 Trends in  Webdesign sit nibh amet  Mauris ipsum sit nibh</h5>
                                 <span class="float-start fw-bold fs-8"> Learn More <i class="bi bi-arrow-right"></i></span>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                       <div class="serv-cove rounded bg-white p-2">
                            <img src="assets/images/blog/Post-holder-image-5-min.jpg" alt="">
                            <div class="p-2">
                                <h5 class="mt-3 fs-7 fw-bold">Top 10 Trends in  Webdesign sit nibh amet  Mauris ipsum sit nibh</h5>
                                 <span class="float-start fw-bold fs-8"> Learn More <i class="bi bi-arrow-right"></i></span>
                            </div>
                       </div>
                    </div>
                    
                </div>
            </div>
        </div> -->



@endsection