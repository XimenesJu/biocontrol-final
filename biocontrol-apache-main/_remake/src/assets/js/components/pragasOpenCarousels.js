$(function() {
    
    $('.LevantamentosKarousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: true,
        center: false,
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