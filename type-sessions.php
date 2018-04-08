<?php
	// Spustim sessions
	@session_start();

	// Pokud neni nastaven session s polozkou total_count - nastavim s hodnotou 0. V oapcnem pripade jen navysuji hodnotu
	if ( !isset( $_SESSION['total_count'] ) ) {
		$_SESSION['total_count'] = 0;
	} else {
		$_SESSION['total_count'] = $_SESSION['total_count'] + 1;
	}

	// Pokud existuje v URL reset a je nastaven na hodnotu 1 - resetnu pocet zhlednuti a nactu znova stranku
	if ( isset( $_GET['reset'] ) && $_GET['reset'] == 1 ) {
		// Nastavim zhlednuti na hodnotu 0
		$_SESSION['total_count'] = 0;

		// Presmeruji zpet na soubor
		header( "Location: " . $_SERVER['PHP_SELF'] );
		die();
	}
?>

	<?php include_once 'partials/header.php'; ?>

		<div class="visitors">
			<h1>Počítadlo</h1>
			<h2>Celkový počet zhlédnutí stránky</h2>
			<p class="visitors-count">
				<?php echo $_SESSION['total_count']; ?>
			</p>
			<p class="visitors-reset">
				<a href="type-sessions.php?reset=1">Reset</a>
			</p>
		</div>

	<?php include_once 'partials/footer.php'; ?>