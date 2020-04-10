'use strict';

var reviewElements = document.querySelectorAll('.reviews__item');
var reviewsContents = document.querySelectorAll('.reviews__text');
var fullReviews = [];

// получаем массив, содержащий полные отзывы

var getfullReviews = function () {
	var number = 0;
    for (var i = 0; i < reviewsContents.length; i++) {
    	var fullReviewElement = reviewsContents[i].textContent;
    	number = number + 1;
    	reviewsContents[i].setAttribute('data-position', number);
    	fullReviews.push(fullReviewElement);
    }

    return fullReviews;
}

fullReviews = getfullReviews();

// получаем короткий отзыв для предварительного показа

var getShortReview =function (element, number) {
    var shortReview = element.textContent.split('', number);
    element.textContent = shortReview.join('') + '...';
};

// отображаем только укороченные отзывы

var getShortReviews = function () {
    for (var i = 0; i < reviewsContents.length; i++) {
    	getShortReview(reviewsContents[i], 78);
    }
};

getShortReviews();

// функция для того чтобы спрятать открытый отзыв

var hideReview = function () {
    for (var i = 0; i < reviewElements.length; i++) {
    	if (reviewElements[i].classList.contains('reviews__item--clicked')) {
    		reviewElements[i].classList.remove('reviews__item--clicked');
    		var reviewText = reviewElements[i].querySelector('.reviews__text');
    		getShortReview(reviewText, 78);
    	}
    }
};

for (var i = 0; i < reviewElements.length; i++) {
    reviewElements[i].addEventListener('click', function (evt) {
		var target = event.currentTarget;
		hideReview();
		target.classList.add('reviews__item--clicked');
		var textElement = target.querySelector('.reviews__text');
		var index = textElement.getAttribute('data-position') - 1;
		textElement.textContent = fullReviews[index];
    });
};
