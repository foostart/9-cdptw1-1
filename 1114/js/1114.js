$(function() {
"use strict";
function owl_carousel () {
    /* ===== Blog carousel =====   */
    $('.blog').owlCarousel({
        autoplay:false,
        responsiveClass:true,
        items : 3, //10 items above 1000px browser width
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:true
            },
            1000:{
                items:3,
                nav:true,
            }
        }
    })

  
}
/* ---- Page Scrollup JS Start ---- */
   //When distance from top = 250px fade button in/out

     $(window).scroll(function(){
    if ($(this).scrollTop() > 250) {
        
        $('#scrollup').fadeIn(300);
        } 
    else {
        $('#scrollup').fadeOut(300);
        }
   }); 
        $('#scrollup').on('click',function(){
        $("html, body").animate({ scrollTop: 0 }, 1000);
        return false;
    });  

/* ===== Event for windows and document =====   */

   
    $( window ).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        owl_carousel ();
           
    });
   
    
});

