/**
 * 
 * responsiveBg
 * Change background-image from elements based on an child img with srcset
 * 
 * @author Vander Amorin
 * http://vanderamorin.com
 * 
 * Usage
 * ===========
 * 
 * Init:
 * <element data-responsive-bg>
 *    <img srcset="">
 * </element>
 * 
 */

document.addEventListener('DOMContentLoaded', function() {

    const responsiveItems = document.querySelectorAll('[data-responsive-bg]');

    if(!responsiveItems.length)
        return false;

    const applyBg = (destiny, img) => {
        img.style.display = 'none';
        destiny.style.backgroundImage = 'url('+ img.currentSrc +')';
    }

    for(let i = 0; i < responsiveItems.length; i++) {

        let currItem = responsiveItems[i];
        let img = currItem.querySelector('img');

        // change the bg everytime image's source changes
        img.addEventListener('load', el => applyBg(currItem, el.target));

        // applies bg on page load
        applyBg(currItem, img);
    }
});