/*!
 * 
 * @author Vander Amorin
 * http://vanderamorin.com
 * 
 * Usage
 * 
 * Init: <element data-parallaxbg></element>
 * Speed control: add the 'data-speed' with a numeric value (defaults to 1.5)
 */
(function() {
    'use strict';

    const parallaxBgItens = $('[data-parallaxbg]');

    if(!parallaxBgItens.length)
        return false

    const defaultSpeed = 1.5

    const parallaxBg = () => {

        parallaxBgItens.each((key, el) => {

            if(!isInViewport(el))
                return true

            const elm = $(el)

            let winWidth = window.innerWidth
            let mobileDisabled = typeof $(el).attr('data-mobiledisabled') == 'undefined' ? false : true

            if(!!mobileDisabled && winWidth <= 768)
                return true

            let speed = elm.data('speed') || defaultSpeed

            let initY = elm.offset().top
            let height = elm.height()

            let scrolled = $(window).scrollTop()

            let diff = scrolled - initY
            let ratio = Math.round((diff / height) * 100)

            elm.css('background-position','center ' + parseInt(-(ratio * speed)) + 'px')
        })
    }

    $(window).on('load scroll', el => parallaxBg())

})();