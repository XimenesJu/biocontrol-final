/**
 * 
 * animateNumber
 * animate number incrementing from start and end value
 * 
 * @author Vander Amorin
 * http://vanderamorin.com
 * 
 * Usage
 * ===========
 * 
 * <element data-animate-number data-start="0" data-end="100"></element>
 * 
 * Optional speed control:
 * add the 'data-speed' attr with a numeric value (defaults to 0.5)
 */
(function() {

    const items = document.querySelectorAll('[data-animate-number]');

    if(items == null)
        return false;

    window.addEventListener('scroll', ev => {

        for(let i = 0; i < items.length; i++) {

            let el = items[i];

            if(el.classList.contains('scroll-fired'))
                continue;

            let elSafeArea = el.getBoundingClientRect().height / 3

            if(window.isInViewport(el, elSafeArea)) {
                el.classList.add('scroll-fired');
                increment(el);
            }
        }
    })

    function increment(el) {

        let startValue = el.dataset.start || 0
        let endValue = el.dataset.end
        let speed = el.dataset.speed || 0.5

        let havesDecimal = endValue.search(/[.,]/g);

        let decimal = (havesDecimal > -1) ? endValue[havesDecimal + 1] : 0

        const incrementFactory = (start, end, isDecimal) => {

            setTimeout(() => {

                start++;

                if(start <= end) {

                    if(isDecimal) {
                        let integer = Math.floor(endValue)
                        el.innerHTML = integer + ',' + start;
                    }

                    else {
                        el.innerHTML = start;
                    }

                    incrementFactory(start, end, isDecimal);
                }

            }, speed);
        }

        incrementFactory(startValue, endValue, false);

        if(havesDecimal)
            setTimeout(() => incrementFactory(0, decimal, true), speed*1.5);
    }

})();