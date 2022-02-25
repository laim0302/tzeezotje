<form class="booking" name="booking" id="booking-form">
	<button class="booking__close" name="reset" type="reset" id="reserv-cancel">
		<svg class="icon--close">
			<use xlink:href="<?= BASE_URL . 'img/svg/sprite.svg#close'; ?>"></use>
		</svg>
	</button>

	<h4 class="booking__h4">Reserve a table</h4>
	<div class="booking__message"></div>
	<label class="booking__label">
		Date of your visit
		<input class="booking__input" name="date" type="date" tabindex="1">
	</label>
	<label class="booking__label">
		Number of persons
		<input class="booking__input" name="number" type="number">
	</label>
	<label class="booking__label">
		Your contact phone
		<input class="booking__input" name="phone" type="text">
	</label>
	<div class="booking__btn-wrapper">
		<button class="booking__btn" name="booking-submit" type="submit" id="reserv-submit">Submit</button>
	</div>
</form>