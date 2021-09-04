<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="/js/jquery.matchHeight-min.js"></script>
<script src="/js/polyfill.js"></script>
<script src="/js/smooth-scroll.polyfills.min.js"></script>
<script src="/js/lazysizes.min.js"></script>
<script src="/js/common.js"></script>

<script>
  $(window).on("load", function() {
    let scroll = new SmoothScroll('a[href*="#"]', {
      header: "header",
      speedAsDuration: true,
      speed: 650,
      easing: 'easeInOutQuint',
    });
  });

  $('.fot_top nav li').matchHeight();

  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    
    
    breakpoints: {
      0: {
        slidesPerView: 1.4,
        spaceBetween: 30,
      },
      900: {
        slidesPerView: 3.7,
        spaceBetween: 30,
      },
    },

    // If we need pagination
    // pagination: {
    //   el: '.swiper-pagination',
    // },

    // // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>
