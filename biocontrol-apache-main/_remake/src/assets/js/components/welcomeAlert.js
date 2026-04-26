$(function() {

    const wa = document.querySelector('.welcome-alert');
    const waBtn = wa.querySelector('.btn');

    if(!window.sessionStorage.getItem('welcomeAlert')) {
        wa.classList.add('show');
    }

    waBtn.addEventListener('click', () => {
        wa.classList.remove('show');
        window.sessionStorage.setItem('welcomeAlert', true);
    });
});