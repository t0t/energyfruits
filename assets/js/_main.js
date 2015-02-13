// $(document).ready(function() {
//     $('.jcarousel').jcarousel();
// });

(function($) {
    $(function() {


$(".video-main__iframe").fitVids();

// Slider
// http://kenwheeler.github.io/slick/
$('.sliderr').slick({
  dots: true,
  speed: 5000,
  slidesToShow: 6,
  slidesToScroll: 4,
  autoplay: true,
  autoplaySpeed: 5000,

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]

});


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





    });
})(jQuery);
