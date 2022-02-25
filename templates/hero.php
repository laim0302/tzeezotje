<section class="hero">
	<picture class="hero__picture">
		<source type="image/webp" srcset="<?= BASE_URL . 'img/hero@1x.webp 1x, ' . BASE_URL . 'img/hero@2x.webp 2x'; ?>">
		<img class="hero__img" src="<?= BASE_URL . 'img/hero@1x.jpg'; ?>" srcset="<?= BASE_URL . 'img/hero@2x.jpg 2x'; ?>" alt="Заставка">
	</picture>

	<div class="container hero__content">
		<p class="hero__schedule">
			OPEN EVERYDAY 6AM - 9PM
		</p>

		<h1 class="h1 hero__h1">
			A&nbsp;bad day with lunch is&nbsp;better than a&nbsp;good day without it.
		</h1>

		<div class="hero__wrapper">
			<button class="btn hero__btn">Reserve a table</button>

			<div class="socials hero__socials">
				<a class="socials__link" href="#">
					<svg class="icon--social-fb">
						<use xlink:href="<?= BASE_URL . 'img/svg/sprite.svg#social-fb'; ?>"></use>
					</svg>
				</a>
				<a class="socials__link" href="#">
					<svg class="icon--social-lg">
						<use xlink:href="<?= BASE_URL . 'img/svg/sprite.svg#social-lg'; ?>"></use>
					</svg>
				</a>
				<a class="socials__link" href="#">
					<svg class="icon--social-tw">
						<use xlink:href="<?= BASE_URL . 'img/svg/sprite.svg#social-tw'; ?>"></use>
					</svg>
				</a>
				<a class="socials__link" href="#">
					<svg class="icon--social-yt">
						<use xlink:href="<?= BASE_URL . 'img/svg/sprite.svg#social-yt'; ?>"></use>
					</svg>
				</a>
			</div>
		</div>
	</div>
</section>