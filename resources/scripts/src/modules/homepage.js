import $ from 'jquery';
    

alert('homepage');
   $('.o-featureSlider').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
      });

