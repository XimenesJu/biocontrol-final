/**
 * Privacy policy and cookies
 */
(function() {
    'use strict';
    
    // Storage service
    var storageService = {

        get: function() {
            return localStorage.getItem('acceptedPolicy');
        },

        set: function() {
            return localStorage.setItem('acceptedPolicy', true);
        }
    }

    var alert = document.getElementsByClassName('policy-alert')[0];

    var accepted = storageService.get();

    if(accepted != null || typeof alert == 'undefined')
        return;

    if(accepted == null)
        alert.setAttribute('class', 'policy-alert');

    var acceptBtn = alert.querySelector('.policy-accept');

    acceptBtn.addEventListener('click', function(e) {
        storageService.set();
        alert.classList.add('d-none');
    });

})();