<section class="gallery">

	<div class="container gallery__container">

		<div class="gallery__content">
			<h2 class="h2 gallery__h2">Sfeerfoto's</h2>

			<p class="gallery__text">
				De beste manier om de sfeer te ervaren is eens langskomen.
				In tussentijd hebben we hier alvast wat foto’s voor je klaar.
			</p>
		</div>

		<!-- Navigation buttons -->
		<div class="gallery__buttons">
			<div class="swiper-button-prev slider2__swiper-button-prev">
				<svg class="icon--arrow-up">
					<use xlink:href="<?= BASE_URL . 'img/svg/sprite.svg#arrow-up'; ?> "></use>
				</svg>
			</div>
			<div class="swiper-button-next slider2__swiper-button-next">
				<svg class="icon--arrow-down">
					<use xlink:href="<?= BASE_URL . 'img/svg/sprite.svg#arrow-down'; ?> "></use>
				</svg>
			</div>
		</div>
	</div>


	<div class="slider2__swiper">
		<!-- Slider main container -->
		<div class="swiper-container slider2__container">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper slider2__wrapper">

				<!-- Slides -->
				<div class="swiper-slide slider2__slide">
					<picture class="gallery__picture">
						<source type="image/webp" srcset="<?= BASE_URL . 'img/s_01@1x.webp 1x, ' . BASE_URL . 'img/s_01@2x.webp 2x'; ?>">
						<img class="gallery__img" src="<?= BASE_URL . 'img/s_01@1x.jpg'; ?>" srcset="<?= BASE_URL . 'img/s_01@2x.jpg 2x'; ?>" alt="Слайд 1">
					</picture>
				</div>

				<div class="swiper-slide slider2__slide">
					<picture class="gallery__picture">
						<source type="image/webp" srcset="<?= BASE_URL . 'img/s_02@1x.webp 1x, ' . BASE_URL . 'img/s_02@2x.webp 2x'; ?>">
						<img class="gallery__img" src="<?= BASE_URL . 'img/s_02@1x.jpg'; ?>" srcset="<?= BASE_URL . 'img/s_02@2x.jpg 2x'; ?>" alt="Слайд 2">
					</picture>
				</div>

				<div class="swiper-slide slider2__slide">
					<picture class="gallery__picture">
						<source type="image/webp" srcset="<?= BASE_URL . 'img/s_03@1x.webp 1x, ' . BASE_URL . 'img/s_03@2x.webp 2x'; ?>">
						<img class="gallery__img" src="<?= BASE_URL . 'img/s_03@1x.jpg'; ?>" srcset="<?= BASE_URL . 'img/s_03@2x.jpg 2x'; ?>" alt="Слайд 3">
					</picture>
				</div>

				<div class="swiper-slide slider2__slide">
					<picture class="gallery__picture">
						<source type="image/webp" srcset="<?= BASE_URL . 'img/s_04@1x.webp 1x, ' . BASE_URL . 'img/s_04@2x.webp 2x'; ?>">
						<img class="gallery__img" src="<?= BASE_URL . 'img/s_04@1x.jpg'; ?>" srcset="<?= BASE_URL . 'img/s_04@2x.jpg 2x'; ?>" alt="Слайд 3">
					</picture>
				</div>

				<div class="swiper-slide slider2__slide">
					<picture class="gallery__picture">
						<source type="image/webp" srcset="<?= BASE_URL . 'img/s_05@1x.webp 1x, ' . BASE_URL . 'img/s_05@2x.webp 2x'; ?>">
						<img class="gallery__img" src="<?= BASE_URL . 'img/s_05@1x.jpg'; ?>" srcset="<?= BASE_URL . 'img/s_05@2x.jpg 2x'; ?>" alt="Слайд 3">
					</picture>
				</div>

				<div class="swiper-slide slider2__slide">
					<picture class="gallery__picture">
						<source type="image/webp" srcset="<?= BASE_URL . 'img/s_06@1x.webp 1x, ' . BASE_URL . 'img/s_06@2x.webp 2x'; ?>">
						<img class="gallery__img" src="<?= BASE_URL . 'img/s_06@1x.jpg'; ?>" srcset="<?= BASE_URL . 'img/s_06@2x.jpg 2x'; ?>" alt="Слайд 3">
					</picture>
				</div>
			</div>
		</div>
	</div>



</section>