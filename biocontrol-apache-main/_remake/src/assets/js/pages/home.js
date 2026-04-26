$(function() {

    const pageWrapper = document.querySelector('.page-home');

    if(pageWrapper == null)
        return false;

    const bannersHome = pageWrapper.querySelector('.homeBannerOwl');

    if(bannersHome != null) {

        let bannersHomeJq = $(bannersHome);

        bannersHomeJq.find('.owl-carousel').owlCarousel({
            items: 1,
            autoplay: 1,
            smartSpeed: 1000,
            fluidSpeed: 8000,
            autoplayTimeout: 8000,
            loop: true,
            dots: true,
            nav: false,
            onTranslate: function(ev) {
                bannersHomeJq.find('.owl-carousel .item .banner-text').removeClass('animate__fadeInUp').addClass('animate__fadeOut');
            },
            onTranslated: function(ev) {
                bannersHomeJq.find('.owl-carousel .owl-item.active .banner-text').removeClass('invisible animate__fadeOut').addClass('animate__fadeInUp');
            }
        });

        if(bannersHome.querySelector('.owl-navigation') != null)
            window.owlNavigation(bannersHome);
    }
    
});