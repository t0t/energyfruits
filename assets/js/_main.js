// $(document).ready(function() {
//     $('.jcarousel').jcarousel();
// });

(function($) {
    $(function() {


$(".main-post__content__entry").fitVids();



// Slider

// Get the current slide
// var currentSlide = $('.slider__btn-next').slick('slickCurrentSlide');

// http://kenwheeler.github.io/slick/
$('.slider').slick({

    // speed: 100,
    // rtl: false,
    slidesToShow: 4,
    slidesToScroll: 4,
    arrows: true,
    // variableWidth: true,


    responsive: [

        {

        breakpoint: 1800,

            settings: {

                slidesToShow: 4,
                slidesToScroll: 4,
                dots: true,
                prevArrow: '.slider__btn-prev',
                nextArrow: '.slider__btn-next'

            }

        },

        {

        breakpoint: 1180,

            settings: {

                slidesToShow: 3,
                slidesToScroll: 3,
                dots: true,
                arrows: true,
                prevArrow: '.slider__btn-prev',
                nextArrow: '.slider__btn-next'

            }

        },

        {

        breakpoint: 1024,

            settings: {

                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: true,
                prevArrow: '.slider__btn-prev',
                nextArrow: '.slider__btn-next'
            }

        },

        {

        breakpoint: 600,

            settings: {

                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 8000

            }

        }

    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object

    ]

});





  function addScrollTopAnimation() {
      
    var $scrolltop_link = $('.scroll-top');

    $scrolltop_link.on( 'click' ,  function ( ev ) {
      
      ev.preventDefault();
      
      $( 'html, body' ).animate( {
        
        scrollTop: 0
        
      }, 700 );
      
    })
    
    // Hides the link initially
    .data('hidden', 1).hide(); 
    
    var scroll_event_fired = false;
    
    $(window).on('scroll', function() {
      
      scroll_event_fired = true;
      
    });
    
    /* 
    Checks every 300 ms if a scroll event has been fired.
    */
    setInterval( function() {
          
      if( scroll_event_fired ) {
        
        /* 
        Stop code below from being executed until the next scroll event. 
        */
        scroll_event_fired = false; 
        
        var is_hidden =  $scrolltop_link.data('hidden'); 
        
        /* 
        Display the scroll top link when the page is scrolled 
        down the height of half a viewport from top,  Hide it otherwise. 
        */
        if ( $( this ).scrollTop()  >  $( this ).height() / 2 ) {
          
          if( is_hidden ) {
            
            $scrolltop_link.fadeIn(1200).data('hidden', 0);
            
          }
        }
        
        else {
          
          if( !is_hidden ) {
            
            $scrolltop_link.slideUp().data('hidden', 1);
      
          }
        }
        
      }
      
    }, 300); 
    
  }

  addScrollTopAnimation(); // start 


// Slider
// $('.slider__item:nth-child(3)').addClass('current');

// $('.slider__btn-next').on('click', function (e) {

//     e.preventDefault();

//     if ($('.current').next().length === 0) {
//         $('.slider__item').removeClass('current').first().addClass('current');
//         return;
//     }
//     $('.current').removeClass('current').next().addClass('current'); 

// });


// $('.slider__btn-prev').on('click', function (e) {
  
//     e.preventDefault();

//     if ($('.current').prev().length === 0) {
//         $('.slider__item').removeClass('current').last().addClass('current');
//         return;
//     }
//     $('.current').removeClass('current').prev().addClass('current');

// });




// $('#close').on('click', function (e) {
// e.preventDefault();


    $( '#close' ).one( "click", function() {
    $(this).parent('div').remove();
    });







    });
})(jQuery);
