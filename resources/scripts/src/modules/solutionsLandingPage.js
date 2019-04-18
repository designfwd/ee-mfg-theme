import $ from 'jquery';
import '../vendor/slick-carousel';
    
    $('.o-capabilitiesSlider').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
    });
