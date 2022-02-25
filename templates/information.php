<section class="information" id="information">
	<div class="container information__container">
		<div class="information__contacts">
			<h2 class="h2 information__h2">Contacts</h2>
			<ul class="information__contacts-list">

				<li class="information__contacts-item">
					<div class="information__contacts-icon">
						<svg class="icon--phone">
							<use xlink:href="<?= BASE_URL . 'img/svg/sprite.svg#phone'; ?> "></use>
						</svg>
					</div>
					<div class="information__contacts-content">
						<p class="information__contacts-caption">
							Phone Number
						</p>
						<p class="information__contacts-text">
							+32 9 282 57 25
						</p>
					</div>
				</li>

				<li class="information__contacts-item">
					<div class="information__contacts-icon">
						<svg class="icon--email">
							<use xlink:href="<?= BASE_URL . 'img/svg/sprite.svg#email'; ?> "></use>
						</svg>
					</div>
					<div class="information__contacts-content">
						<p class="information__contacts-caption">
							Email
						</p>
						<p class="information__contacts-text">
							info@email.com
						</p>
					</div>
				</li>

				<li class="information__contacts-item">
					<div class="information__contacts-icon">
						<svg class="icon--clock">
							<use xlink:href="<?= BASE_URL . 'img/svg/sprite.svg#clock'; ?> "></use>
						</svg>
					</div>
					<div class="information__contacts-content">
						<p class="information__contacts-caption">
							Opening Hours
						</p>
						<p class="information__contacts-text">
							Everyday from 6 AM - 9 PM
						</p>
					</div>
				</li>

				<li class="information__contacts-item">
					<div class="information__contacts-icon">
						<svg class="icon--map">
							<use xlink:href="<?= BASE_URL . 'img/svg/sprite.svg#map'; ?> "></use>
						</svg>
					</div>
					<div class="information__contacts-content">
						<p class="information__contacts-caption">
							Map Street
						</p>
						<p class="information__contacts-text">
							Jl. Raya Surabaya 2787
						</p>
					</div>
				</li>

			</ul>
		</div>

		<div class="information__questions">
			<h2 class="h2 information__h2">Have any questions?</h2>

			<form class="information__form" name="information__form" id="information-form">
				<div class="information__form-wrapper">
					<label class="information__label">
						Name
						<input class="information__input" name="name" type="text" placeholder="Input your name">
					</label>
					<label class="information__label">
						Email
						<input class="information__input" name="email" type="email" placeholder="Input your email">
					</label>
				</div>
				<label class="information__label">
					Speciale Request
					<textarea class="information__textarea" name="request" placeholder="Input your special request"></textarea>
				</label>
				<div class="information__button-wrapper">
					<button class="btn information__btn" name="information-submit" type="submit" id="information-submit">Send</button>
					<p class="information__message"></p>
				</div>
			</form>
		</div>
	</div>

	<div class="container information__map-container">
		<img class="information__map-img" src="<?= BASE_URL . 'img/map.jpg'; ?>" alt="Location">
	</div>

</section>