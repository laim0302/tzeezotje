// ПЕРВЫЙ СЛАЙДЕР
const slider1Container = document.querySelector('.slider1__container');

const slider1 = new Swiper(slider1Container, {
	slidesPerView: 1,
	// spaceBetween: 20,
	loop: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	}
});


// ВТОРОЙ СЛАЙДЕР
const slider2Container = document.querySelector('.slider2__container');

const slider2 = new Swiper(slider2Container, {
	slidesPerView: 'auto',
	spaceBetween: 10,
	loop: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	centeredSlides: true,
	breakpoints: {
		767: {
			slidesPerView: 'auto',
			spaceBetween: 30
		}
	}
});