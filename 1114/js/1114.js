$(function() {

function owl_carousel () {

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


   
    $( window ).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        owl_carousel ();
           
    });
   
    
});

