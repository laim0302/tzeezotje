<body>
	<!-- HEADER -->
	<header class="container header">

		<button class="header__burger">
			<svg class="icon--burger ">
				<use xlink:href="<?= BASE_URL . 'img/svg/sprite.svg#burger'; ?>"></use>
			</svg>
		</button>

		<a class="header__logo" href="<?= BASE_URL; ?>">
			<img src="<?= BASE_URL . 'img/logo1.png'; ?> " alt="Logo">
		</a>

		<nav class="nav header__nav ">
			<button class="header__nav-close">
				<svg class="icon--close">
					<use xlink:href="<?= BASE_URL . 'img/svg/sprite.svg#close'; ?>"></use>
				</svg>
			</button>

			<a class="header__nav-link" href="#dishes">À la carte</a>
			<a class="header__nav-link" href="#quotation">Wijnkaart</a>
			<a class="header__nav-link" href="#assortment">Lunchmenu</a>
			<a class="header__nav-link" href="#information">Contacts</a>
		</nav>

		<a class="header__phone header__phone-icon" href="tel:+3292825725">
			<svg class="icon--phone ">
				<use xlink:href="<?= BASE_URL . 'img/svg/sprite.svg#phone'; ?>"></use>
			</svg>
			<p class="header__phone-text">+32 9 282 57 25</p>
		</a>
	</header>