$(document).ready(function () {
    // Modal Scripting
    window.onload = function(){
        setTimeout(function(){
            $('#myModal').modal('show')
        }, 4000)
    }

    // Scroll Up Btn Scripting
    $(window).scroll(function(){
        if(this.scrollY > 500){
            $('.scroll-up').addClass("show");
        }else{
            $('.scroll-up').removeClass("show");
        }
    })
    // $('.scroll-up').click(function(){
    //     $("html,body").animate({scrollY:0});
    // });
   // Carousel Scripting
   $(".owl-carousel").owlCarousel({
    items:3,
    margin:18,
    loop:true,
    autoplay:true,
    autoplayTimeOut: 1000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        800:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:false
        }
    }
   });
});