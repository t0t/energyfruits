
(function($) {
$(function() {

//toggle bug in iphone6
var toggleBtn = document.getElementById('toggle');
var overMenu = document.getElementsByClassName('nav-main')[0].getElementsByTagName('ul')[0];
function togBot() {
  if ( !toggleBtn.checked ) {
    overMenu.className = " ";
  } else {
  overMenu.className = "checked";
  }
}
toggleBtn.addEventListener( 'click', togBot);

// FitVids.js
//http://jsbin.com/boreme/17/edit?html,css,js,output
// $(".main-post__content__entry").fitVids();
//     $(window).scroll(function() {
//         var scroll = $(window).scrollTop();
//         if (scroll >= 50) {
//         $(".brand").addClass("encoge");
//         } else {
//         $(".brand").removeClass("encoge");
//     }
// });

// Slider
// Get the current slide
// var currentSlide = $('.slider__btn-next').slick('slickCurrentSlide');
// http://kenwheeler.github.io/slick/

$('.sldr').slick({
    slidesToShow: 8,
    slidesToScroll: 8,
    dots: true,
    responsive: [
        {
            breakpoint: 1350,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 6,
                infinite: true,
                arrows: true,
                dots: true
            }
        },
        {
            breakpoint: 1052,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
                infinite: true,
                arrows: true,
                dots: true
            }
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                arrows: false,
                dots: true
            }
        }
    ]
});

$('.slider-2').slick({
    slidesToShow: 6,
    slidesToScroll: 6,
    dots: true,
    responsive: [
        {
            breakpoint: 1350,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                arrows: true,
                dots: true
            }
        },
        {
            breakpoint: 1052,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                arrows: true,
                dots: true
            }
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                arrows: false,
                dots: true
            }
        }
    ]
});

// SCROLL TOP ANIMATION
function addScrollTopAnimation() {
var $scrolltop_link = $('.scroll-top');
$scrolltop_link.on( 'click' , function(ev) {
    ev.preventDefault();
    $( 'html, body' ).animate( { scrollTop: 0 }, 700 );
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


});
})(jQuery);
