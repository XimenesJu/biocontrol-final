/**
 * 
 * toggleClass
 * Toggle CSS classes from target element
 * 
 * @author Vander Amorin
 * http://vanderamorin.com
 * 
 * Usage
 * ===========
 * 
 * <button data-toggle-class="cssClass" data-target=".targetElement">
 *      Button
 * </button>
 * 
 * <element class="targetElement"></element>
 * 
 * @param toggleClass
 * CSS classes to add/remove from target element. Multiple classes can be used separed by space: class1 class2 class3
 * 
 * @param target (optional)
 * Any valid CSS selector. If not set, toggleClass will be applied to the clicked element
 * 
 */

$(function() {

    $('[data-toggle-class]').on('click', ev => {
        let el = ev.target;
        let classes = el.dataset.toggleClass;

        if(!el.dataset.target) {
            el.classList.toggle(classes);
            return true;
        }

        $(el.dataset.target).toggleClass(classes);
    });

});