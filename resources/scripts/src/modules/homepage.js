import $ from 'jquery';
import '../vendor/slick-carousel';
    
  $('.o-featureSlider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    useTransform: true,
  });

  $('.o-industrySlider').slick({
    lazyLoad: 'ondemand',
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });
