/* 
 * @author Vander Amorin
 * http://vanderamorin.com
 */

window.isInViewport = function(element, offset = 0) {

    const rect = element.getBoundingClientRect()

    return (
        (rect.height > 0 || rect.width > 0) &&
        rect.bottom >= 0 &&
        rect.right >= 0 &&
        (rect.top + offset) <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.left <= (window.innerWidth || document.documentElement.clientWidth)
    )
}