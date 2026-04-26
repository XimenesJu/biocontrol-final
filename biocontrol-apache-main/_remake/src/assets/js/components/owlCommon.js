$(function() {

    $('.owl-common').each((index, el) => {

        let responsiveOptions = {}

        if(!!el.dataset.itemsMedium) {
            responsiveOptions[576] = {
                items: el.dataset.itemsMedium
            }
        }

        if(!!el.dataset.itemsLarge) {
            responsiveOptions[992] = {
                items: el.dataset.itemsLarge
            }
        }

        $(el).find('.owl-carousel').owlCarousel({
            autoplay: 1,
            autoplaySpeed: 500,
            fluidSpeed: 8000,
            autoplayTimeout: 8000,
            items: el.dataset.items || 1,
            loop: el.dataset.loop || false,
            dots: el.dataset.dots || false,
            nav: el.dataset.nav || false,
            margin: parseInt(el.dataset.margin) || 1,
            responsive: responsiveOptions
        });
    });

});