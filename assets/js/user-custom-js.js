const menuIcon = document.querySelector
('.hamburger-menu');

const menuIconText = document.querySelector
('.hamburger-menu-text');

const navbar = document.querySelector('.navbar');

menuIcon.addEventListener('click' , () => {
navbar.classList.toggle("change");
});

menuIconText.addEventListener('click' , () => {
    navbar.classList.toggle("change");
});


 jQuery(document).ready(function ($) {
  
    var gadgetCarousel = $(".carousel");
    
    gadgetCarousel.each(function() {
      if ($(this).is(".type-one-carousel")) {
          $(this).slick({
            slidesToShow: 2.25,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            arrows: false,
            rtl:true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                  slidesToShow: 2.25,
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
            ]
        });
      } 
      else if ($(this).is(".type-two-carousel")){
        $(this).slick({
            slidesToShow: 2.25,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            arrows: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                  slidesToShow: 2.25,
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
            ]
        });
      }
      else {
        $(this).slick();
      }
    })
  }); // end of os-carousel.js
