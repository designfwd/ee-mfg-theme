jQuery(document).load(function() {
    alert('homepage');
    jQuery('.o-featureSlider').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
      });
});