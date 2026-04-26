/**
 * =================================================================
 *   Arquivo de configurações avulsas válidas para toda a plicação
 * =================================================================
 */



// Eventos de término de animações e transições
const transitionsEndEvent   = 'webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend'
const animationsEndEvent    = 'webkitAnimationEnd oanimationend msAnimationEnd animationend'

$(function() {


    $('.btn-tab-header').on('click', ev => {
        let el = $(ev.target);

        el.closest('.tab-wrapper').find('.btn-tab-header').removeClass('active');

        el.addClass('active')
    });


    /**
     * reCaptcha IDs
     * 
     * Adicionando ID de cada reCaptcha baseado na posição deles no DOM.
     * Após o envio de cada formulário que tenha recaptcha, esse ID será usado para fazer o reset do recpectivo reCaptcha.
     */

    var recaptchas = $('.g-recaptcha');

    if(recaptchas.length) {
        recaptchas.each((i, el) => el.dataset.recaptchaId = i);
    }



    /**
     * Owl carousel - configuração base
     */
    /*
    const bannersHome = pageHome.querySelector('.homeBannerOwl');

    if(bannersHome != null) {

        $(bannersHome).find('.owl-carousel').owlCarousel({
            items: 1,
            autoplay: 1,
            autoplaySpeed: 500,
            fluidSpeed: 8000,
            autoplayTimeout: 8000,
            loop: true,
            dots: false,
            nav: false
        });

        if(bannersHome.querySelector('.owl-navigation') != null)
            window.owlNavigation(bannersHome);
    }
    */

    /**
     * Owl carousel - função genérica para navegação customizada
     */
    window.owlNavigation = function(owlWrapper) {

        $(owlWrapper).each(function(i, e) {

            let el = $(e);

            el.find('.owl-navigation .next').click(() => {
                el.find('.owl-carousel').trigger('next.owl.carousel');
            });
    
            el.find('.owl-navigation .prev').click(() => {
                el.find('.owl-carousel').trigger('prev.owl.carousel');
            });

        });
    }



    /**
     * Inicialização condicional do Fancybox
     */
    const hasFancy = $(".fancybox, [data-fancybox]");

    if(hasFancy.length != 0) {

        $(hasFancy).fancybox({
            infobar: false,
            idleTime: false,
            buttons: [
                'close'
            ]
        });
    }


    /**
     * Inicialização do Popover
     */
    const hasPopover = $('[data-toggle="popover"]');
    if(hasPopover.length)
        hasPopover.popover();
    

    /**
     * Animando as ações de 'abrir e fechar' dos drop-downs
     */
    const hasDropdown = $('.dropdown');
    if(hasDropdown.length) {

        hasDropdown.on('show.bs.dropdown', function(e) {
            $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
            $(this).find('i[class*="arrow"], i[class*="angle"], i[class*="caret"]').toggleClass('fa-rotate-180');
        });

        hasDropdown.on('hide.bs.dropdown', function(e) {
            $(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
            $(this).find('i[class*="arrow"], i[class*="angle"], i[class*="caret"]').toggleClass('fa-rotate-180');
        });
    }


    /**
     * Input masks
     */

    $('.cnpjMask').mask('99.999.999/9999-99');
    $('.cpfMask').mask('999.999.999-99');
    $('.cepMask').mask('99999-999');

    let phoneMaskBehavior = function(val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    }

    let options = {
        onKeyPress: function(val, e, field, options){
            field.mask(phoneMaskBehavior.apply({}, arguments), options);
        }
    };

    $('.phoneMask').mask(phoneMaskBehavior, options);

    var cpnjBehavior = function(val) {
        return val.replace(/\D/g, '').length <= 11 ? '000.000.000-009' : '00.000.000/0000-00';
    }

    let cpnjOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(cpnjBehavior.apply({}, arguments), options);
        }
    }

    $('.cpnj').mask(cpnjBehavior, cpnjOptions);


    // Go to top Buttom
    $('.go-top').click(function () {
        $("html, body").animate({ scrollTop: 0 }, 530);
        return false;
    });



    // Custom input file
    $('.input-file input').on('change', function (e) {

        let fileName = e.target.files[0].name;

        $('.input-file .file-info').addClass('radius').html(fileName);
    });

    // Go to top Buttom
    /*
    $(".go-top").css({
        bottom: '-40px',
        opacity: '0'
    });

    $(window).scroll(function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop >= 400) { $('.go-top').css({ opacity: '1', bottom: '20px' }, 700); }
        else { $('.go-top').css({ opacity: '0', bottom: '-40px' }, 700); }
    });

    */

});