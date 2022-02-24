document.addEventListener('DOMContentLoaded', function () {
	// Слайдер swiper.js
	const slider1 = document.querySelector('.slider1');

	const swiper = new Swiper(slider1, {
		direction: 'horizontal',
		loop: true,
		slidesPerView: 1,
		spaceBetween: 10,
		// pagination: {
		// 	el: '.swiper-pagination',
		// 	type: 'bullets',
		// 	clickable: true,
		// },
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		// scrollbar: {
		// 	el: '.swiper-scrollbar',
		// },

		// autoplay: {
		// 	delay: 10000,
		// },
		// breakpoints: {
		// 	768: {
		// 		slidesPerView: 2,
		// 	},
		// 	1025: {
		// 		slidesPerView: 3,
		// 		centeredSlides: true,
		// 	}
		// },
	});
});