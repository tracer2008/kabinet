require('./bootstrap');

import Support from "./support";
window.support = new Support();

document.addEventListener('DOMContentLoaded', () => {

    const anchors = document.querySelectorAll('a[href*="#"]')

    for (let anchor of anchors) {
        anchor.addEventListener('click', function (e) {
            e.preventDefault()

            const blockID = anchor.getAttribute('href').substr(1)

            document.getElementById(blockID).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            })
            let menu = document.querySelector('.menu_wrap');
            if (menu.classList.contains('show')) {
                console.log('544654');
                menu.classList.remove('show');
            }
        })
    }

    //Закрытие модальных окон
    const modals_remove = document.querySelectorAll('._ocm');
    const modals = document.querySelectorAll('._modal');

    modals_remove.forEach(function (elem) {
        elem.addEventListener('click', function () {
            modals.forEach(function (el) {
                el.classList.remove('show');
            });
        });
    });

    //cookie
    let cookieDate = localStorage.getItem('cookieDate');
    let cookieNotification = document.getElementById('cookie_notification');
    let cookieBtn = cookieNotification.querySelector('.cookie_accept');

    // Если записи про кукисы нет или она просрочена на 1 год, то показываем информацию про кукисы
    if( !cookieDate || (+cookieDate + 31536000000) < Date.now() ){
        cookieNotification.classList.add('show');
    }

    // При клике на кнопку, в локальное хранилище записывается текущая дата в системе UNIX
    cookieBtn.addEventListener('click', function(){
        localStorage.setItem( 'cookieDate', Date.now() );
        cookieNotification.classList.remove('show');
    })
});
