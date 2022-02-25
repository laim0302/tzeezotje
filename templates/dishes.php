<section class="dishes" id="dishes">
	<div class="container dishes__container">
		<ul class="dishes__list">

			<li class="dishes__item">
				<h4 class="dishes__title">
					Woensdag 12/01
				</h4>
				<p class="dishes__description">
					<span class="dishes__text">Salade met Serrano</span>
					<svg class="icon--bullets">
						<use xlink:href="<?php BASE_URL . 'img/svg/sprite.svg#bullets'; ?>"></use>
					</svg>
					<span class="dishes__text">Steak Tartaar</span>
				</p>
			</li>

			<li class="dishes__item">
				<h4 class="dishes__title">
					Donderdag 13/01
				</h4>
				<p class="dishes__description">
					<span class="dishes__text">Toast Roquefort</span>
					<svg class="icon--bullets">
						<use xlink:href="<?php BASE_URL . 'img/svg/sprite.svg#bullets'; ?>"></use>
					</svg>
					<span class="dishes__text">Penne met Kip en Prei</span>
				</p>
			</li>

			<li class="dishes__item">
				<h4 class="dishes__title">
					Vrijdag 14/01
				</h4>
				<p class="dishes__description">
					<span class="dishes__text">Verrassing van de Chef</span>
					<svg class="icon--bullets">
						<use xlink:href="<?php BASE_URL . 'img/svg/sprite.svg#bullets'; ?>"></use>
					</svg>
					<span class="dishes__text">Penne met Kip en Prei</span>
				</p>
			</li>

			<li class="dishes__item">
				<h4 class="dishes__title">
					Vrijdag 15/01
				</h4>
				<p class="dishes__description">
					<span class="dishes__text">Verrassing van de Chef</span>
					<svg class="icon--bullets">
						<use xlink:href="<?php BASE_URL . 'img/svg/sprite.svg#bullets'; ?>"></use>
					</svg>
					<span class="dishes__text">Penne met Kip en Prei</span>
				</p>
			</li>

			<li class="dishes__item">
				<h4 class="dishes__title">
					Vrijdag 16/01
				</h4>
				<p class="dishes__description">
					<span class="dishes__text">Verrassing van de Chef</span>
					<svg class="icon--bullets">
						<use xlink:href="<?php BASE_URL . 'img/svg/sprite.svg#bullets'; ?>"></use>
					</svg>
					<span class="dishes__text">Penne met Kip en Prei</span>
				</p>
			</li>
		</ul>

		<div class="dishes__illustration">
			<div class="dishes__inner-border"></div>
			<picture class="dishes__picture dishes__picture--1">
				<source type="image/webp" srcset="<?= BASE_URL . 'img/p_01@1x.webp 1x, ' . BASE_URL . 'img/p_01@2x.webp 2x'; ?>">
				<img class="dishes__img dishes__img--1" src="<?= BASE_URL . 'img/p_01@1x.jpg'; ?>" srcset="<?= BASE_URL . 'img/p_01@2x.jpg 2x'; ?>" alt="Фото1">
			</picture>

			<picture class="dishes__picture">
				<source type="image/webp" srcset="<?= BASE_URL . 'img/p_02@1x.webp 1x, ' . BASE_URL . 'img/p_02@2x.webp 2x'; ?>">
				<img class="dishes__img dishes__img--2" src="<?= BASE_URL . 'img/p_02@1x.jpg'; ?>" srcset="<?= BASE_URL . 'img/p_02@2x.jpg 2x'; ?>" alt="Фото2">
			</picture>
		</div>

	</div>
</section>