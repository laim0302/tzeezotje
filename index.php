<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config.php';
// require $_SERVER['DOCUMENT_ROOT'] . '/samples/tzeezotje/config.php';

require $root . '/templates/head.php';
require $root . '/templates/header.php';
?>

<main>
	<?php
	require $root . '/templates/hero.php';
	require $root . '/templates/dishes.php';
	require $root . '/templates/quotation.php';
	require $root . '/templates/assortment.php';
	require $root . '/templates/booking.php';
	require $root . '/templates/gallery.php';
	require $root . '/templates/information.php';
	?>
</main>

<?php
require $root . '/templates/footer.php';
?>