<?php

	// Pokud neni nastaven cookie s polozkou total_count - nastavim s hodnotou 0. V oapcnem pripade jen navysuji hodnotu
	// Vyzkousel jsem ternarni operator
	setcookie( 'total_count', isset( $_COOKIE['total_count'] ) ? $_COOKIE['total_count'] + 1 : 0 );

	// Reset cookie
	if ( isset( $_GET['reset'] ) && $_GET['reset'] == 1 ) {
		setcookie( 'total_count', 1 );

		header( "Location: " . $_SERVER['PHP_SELF'] );
	}

?>

<?php include_once 'partials/header.php'; ?>

	<div class="visitors">
		<h1>Počítadlo</h1>
		<h2>Celkový počet zhlédnutí stránky</h2>
		<p class="visitors-count">
			<?php echo $_COOKIE['total_count']; ?>
		</p>
		<p class="visitors-reset">
			<a href="type-cookies.php?reset=1">Reset</a>
		</p>
	</div>

<?php include_once 'partials/footer.php'; ?>