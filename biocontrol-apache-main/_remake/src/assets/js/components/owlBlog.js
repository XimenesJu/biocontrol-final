$(function() {

    const items = document.querySelectorAll('.owl-blog-posts');

    if(items == null) {
        return false;
    }

    for(let i = 0; i < items.length; i++) {

        let responsiveOptions = {}

        if(!!items[i].dataset.itemsMedium) {
            responsiveOptions[576] = {
                items: items[i].dataset.itemsMedium
            }
        }

        if(!!items[i].dataset.itemsLarge) {
            responsiveOptions[992] = {
                items: items[i].dataset.itemsLarge
            }
        }

        $(items[i]).find('.owl-carousel').owlCarousel({
            items: items[i].dataset.items,
            autoplay: 1,
            smartSpeed: 1000,
            fluidSpeed: 8000,
            autoplayTimeout: 8000,
            margin: 30,
            loop: true,
            dots: true,
            nav: false,
            responsive: responsiveOptions
        });

        if(items[i].querySelector('.owl-navigation') != null)
            window.owlNavigation(items[i]);
    }
});