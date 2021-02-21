$(function(){

    $('.menu__btn').on('click', function() {
      $('.menu__list').toggleClass('menu__list__active')
    }); 
    
    $('.heroes-slider-img').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.heroes-slider-text',
        prevArrow: '<button class="slick-btn slick-prev"><img src="images/left.png" alt="prev"></button>',
        nextArrow: '<button class="slick-btn slick-next"><img src="images/right.png" alt="next"></button>',
        responsive: [
        {
          breakpoint: 769,
          settings: {
            arrows: false
          }
        }
      ]
      });

      $('.heroes-slider-text').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.heroes-slider-img',
        autoplay: false,
        fade: true,
        arrows: false
      });
});