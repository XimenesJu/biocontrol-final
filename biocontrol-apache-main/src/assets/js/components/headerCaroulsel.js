$(function() {
    
    $('.headerCarousel').owlCarousel({
        loop:true,
        margin:20,
        nav:false,
        dots: true,
        center: true,
        dotsEach: true,
        autoplay: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            }
        }
    })

})