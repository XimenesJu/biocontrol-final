/*!
 * 
 * moveOnScroll
 * Move elements on window's scroll event
 * 
 * @author Vander Amorin
 * http://vanderamorin.com
 * 
 * Requires helper 'isInViewport' and jQuey
 * 
 * Usage
 * ===========
 * 
 * Init: <element data-move-on-scroll></element>
 * 
 * @param data-speed
 * min/default value: 5
 * 
 * @param data-direction
 * default: top
 * supported: bottom, left, right
 * 
 */

(function() {

    const toMove = $('[data-move-on-scroll]');

    if(!toMove.length)
        return false;

    const defaultSpeed = 5;

    let scrollPosition = 0;

    window.onscroll = ev => {

        let scrPos = $(window).scrollTop();

        for(let i = 0; i < toMove.length; i++) {

            if(!isInViewport(toMove[i]))
                continue;

            const el = $(toMove[i]);

            let speed = el.data('speed') || defaultSpeed;
            
            let direction = el.data('direction') || 'default'

            let newStyle = {
                transform: 'translate'
            }

            let initY = 0

            var diff = scrPos - initY

            var ratio = Math.round((diff / 1000) * 100)

            let newTransformValue = parseInt(ratio * speed)

            switch(direction) {

                case 'left':
                    newStyle.transform += 'X('+ -newTransformValue +'px)';
                    break;

                case 'right':
                    newStyle.transform += 'X('+ newTransformValue +'px)';
                    break;

                case 'bottom':
                    newStyle.transform += 'Y('+ newTransformValue +'px)';
                    break;

                default:
                    newStyle.transform += 'Y('+ -newTransformValue +'px)';
                    break;
            }

            el.css(newStyle);
        }

        scrollPosition = scrPos;
    }

})();