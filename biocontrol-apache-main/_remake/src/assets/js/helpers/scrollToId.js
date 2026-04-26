/**
 * 
 * scrollToId
 * Animate window while scrolling to the target element with an ID selector
 * 
 * @author Vander Amorin
 * http://vanderamorin.com
 * 
 * Usage
 * ===========
 * 
 * <button data-scroll-to-id="#target">
 *      Button
 * </button>
 * 
 * <a href="#target" data-scroll-to-id>
 *      Link
 * </a>
 * 
 * <element id="target"></element>
 */

$('[data-scroll-to-id]').on('click', function(e) {
    e.preventDefault();

    let el = $(this);

    let selector = el.data('scrollToId') || el.attr('href');

    let destiny = $(selector);

    $("html, body").animate({ scrollTop: destiny.offset().top }, 530);
    
    window.location.hash = selector;
});