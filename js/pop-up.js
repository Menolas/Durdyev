'use strict';

var ESC_KEYCODE = 27;
var ENTER_KEYCODE = 13;
var popUp = document.querySelector('.video__pop-up');
var popUpBtns = document.querySelectorAll('.btn');
var container = document.querySelector('.container');
var popUpCloseBtn = document.querySelector('.form__close-btn');
var formSubmitBtns = document.querySelectorAll('input[type="submit"]');

var closePopUp = function () {
    popUp.classList.remove('pop-up--shown');
    container.classList.remove('container--shaded');
    document.removeEventListener('keydown', onPopUpEscPress);
};

var onPopUpEscPress = function (evt) {
    if (evt.keyCode === ESC_KEYCODE) {
        closePopUp();
    }
};

var openPopUp = function () {
    popUp.classList.add('pop-up--shown');
    container.classList.add('container--shaded');
    document.addEventListener('keydown', onPopUpEscPress);
    popUpCloseBtn.addEventListener('click', closePopUp);
};

if (popUpCloseBtn) {
    popUpCloseBtn.addEventListener('click', closePopUp);
}


if (document.documentElement.clientWidth < 1024) {

    for (var i = 0; i < popUpBtns.length; i++) {
        popUpBtns[i].addEventListener('click', function () {
            openPopUp();
        });
    };
};


if (document.documentElement.clientWidth >= 1024) {
    
    for (var i = 0; i < popUpBtns.length; i++) {
        popUpBtns[i].removeEventListener('click', function () {
            openPopUp();
        });
    }

    for (var i = 0; i < formSubmitBtns.length; i++) {
        formSubmitBtns[i].value = "Получи доступ всего за 5$";
    }
};
