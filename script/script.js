document.addEventListener('DOMContentLoaded', function () {

	// Плавный скролл до якоря
	function smoothScroll() {
		const anchors = document.querySelectorAll('a[href*="#"]');

		for (let anchor of anchors) {
			anchor.addEventListener('click', (event) => {
				event.preventDefault();
				const blockID = anchor.getAttribute('href');
				document.querySelector('' + blockID).scrollIntoView({
					behavior: "smooth",
					block: "start"
				});
			});
		}
	}

	smoothScroll();

	// Мобильное меню
	function burgerMenu() {
		const menu = document.querySelector(".header__nav");
		const burgerBtn = document.querySelector(".header__burger");
		const closeBtn = document.querySelector(".header__nav-close");

		burgerBtn.addEventListener('click', function () {
			menu.classList.add("header__nav--active");
		});

		closeBtn.addEventListener('click', function () {
			menu.classList.remove("header__nav--active");

		});
	}
	burgerMenu();
});