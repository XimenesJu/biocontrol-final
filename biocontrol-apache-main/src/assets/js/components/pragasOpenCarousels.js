$(function() {
    
    $('.LevantamentosKarousel').owlCarousel({
        loop:true,
        margin:20,
        nav:false,
        dots: true,
        center: true,
        dotsEach: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            }
        }
    })

    $('.solucoesProdutosCarousel').owlCarousel({
        loop:true,
        margin:100,
        nav:false,
        dots: true,
        dotsEach: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            }
        }
    })
})