$(function() {
    $('.hamburger').on('click', function(){
        $('.navbar').toggleClass('navbar-hide')
        $('.navbar_header').toggleClass('navbar-hide')
        $(this).toggleClass('is-active')
    })
})