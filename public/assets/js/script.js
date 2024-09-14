$( document ).ready(function() {
    var w = window.innerWidth;

    if(w > 767){
        $('#menu-jk').scrollToFixed();
    }else{
       // $('#menu-jk').scrollToFixed();
    }



})

$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:2,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,1],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        autoPlay:true
    });
});

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:15,
    nav:true,
     items:4,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

$(document).ready(function() {
    $("#register-form").validate({
        rules: {
            name: "required",                    
            password: {
                required: true,
                minlength: 6
            },
           city: "required",
          gender: "required"
         
        },
        messages: {
            name: "Please enter your Name",                   
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
            },
          city: "Please enter your city",
          gender: "This field is required"
        },
         errorPlacement: function(error, element) 
    {
    if ( element.is(":radio") ) 
    {
        error.appendTo( element.parents('.form-group') );
    }
    else 
    { // This is the default behavior 
        error.insertAfter( element );
    }
    },
        submitHandler: function(form) {
            form.submit();
        }

});
});



