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
    .name_err,.email_err{
        color: red;
        position: relative;
    top: -18px;
    }
</style>

<div class="page-nav no-margin row" id="image">
    <div class="container">
        <div class="row">
            <h2 class="text-start">Contact Us</h2>
            <ul>
                <li><a href="{{route('index')}}"><i class="bi bi-house-door"></i> Home</a></li>
                <li><i class="bi bi-chevron-double-right pe-2"></i>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<div class="row contact-rooo big-padding no-margin">
                <div class="container">
                   <div class="row">
                       
                  
                    <div style="padding:20px" class="col-sm-7">
                    <h2 class="fs-4 fw-bold">Contact Form</h2> <br>
                       <form method="post" id="register-form">
                        @csrf
                            <div class="row cont-row">
                                <div class="col-sm-3 "><label>Enter Name </label><span>:</span></div>
                                <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" id="name" class="form-control input-sm">
                                <span class="name_err"></span>
                            </div>
                               
                            </div>
                            <div class="row cont-row">
                                <div class="col-sm-3"><label>Email Address </label><span>:</span></div>
                                <div class="col-sm-8"><input type="email"  name="email" placeholder="Enter Email Address" class="form-control input-sm">
                                <span class="email_err"></span>
                            </div>
                            </div>
                             <div class="row cont-row">
                                <div class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                                <div class="col-sm-8"><input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control input-sm"></div>
                            </div>
                             <div class="row cont-row">
                                <div class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                                <div class="col-sm-8">
                                  <textarea rows="5"  name="message" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                                </div>
                            </div>
                             <div style="margin-top:10px;" class="row">
                                <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                                <div class="col-sm-8">
                                    <input type="hidden" name="">
                                 <button type="submit" class="btn btn-primary fw-bolder px-4 fs-6 py-3 btn-sm">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                     <div class="col-sm-5">    
                          <div class="serv"> 
                            <!-- <h2 class="fs-4 fw-bold" style="margin-top:10px;">Address</h2>
                            <p class="fs-5">
                                  Smart Computers <br>
                                    Daman Street<br>
                                    K.K District<br>
                                    Phone:+91 9878787878<br>
                                    Email:info@smart-eye.in<br>
                                    Website:www.smart-eye.com<br>
                            </p> -->
                            <div class="conact-us-wrap-one">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.2285573891463!2d77.37579817502576!3d28.62291127566993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceff61f435049%3A0xa3e7780d94730f8c!2sMawai%20Infotech%20Ltd.!5e0!3m2!1sen!2sin!4v1692004444752!5m2!1sen!2sin" width="100%" height="475px" frameborder="0" allowfullscreen></iframe>

</div>
        
                       </div>    
                     </div>
                  </div>
                </div>
              </div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    $('#register-form').submit(function(event) {
        event.preventDefault(); 
        $('#response-message').html('');

        // Validation
        var name = $('#name').val().trim();
        var email = $('input[name="email"]').val().trim();
        var mobile = $('input[name="mobile"]').val().trim();
        var message = $('textarea[name="message"]').val().trim();
        $('.name_err').html('')  
        $('.email_err').html('')     
        // if (name === '' || email === '' || mobile === '') {
        //     $('#response-message').html('<div class="alert alert-danger">All fields are required.</div>');
        //     return;
        // }
       if(name==''){
        $('.name_err').html('Name fields are required')    
       }else if(email==''){
        $('.email_err').html('Email fields are required')   
       }else{

      
        // Ajax request
        $.ajax({
            url: '/save_data', // Replace with your endpoint URL
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                if(response.status==1)
            {
                alert("succesfull")
                $('form').trigger("reset");
            }else{
                $('.email_err').html(response.message)
            }
            },
        });
    }
    });
});
</script>

