<?php
	require_once 'inc/config.php';

	/*
	 * Získání počtu návštěv z DB
	 */

	// Připravím si query pro spuštění, abych předešel SQL Injection
	$query = $db->prepare( 'SELECT total_count FROM visitors' );

	// Spustím query
	// PS. Nevím zda je nutné toto dělat pro SELECT? Ale vyzkouším si princip, jak to funguje.
	$query->execute();

	// Nyní si uložím to, co mi z DB přišlo do proměnné result jako objekt.
	$result = $query->fetch(PDO::FETCH_OBJ);

	// Získám konkrétní číslo zhlédnutí
	$total_count = $result->total_count;



	/*
	 * Nahrání nového počtu zhlédnutí do DB
	 */

	// Připravím si query pro spuštění, abych předešel SQL Injection
	$query = $db->prepare("
		UPDATE visitors
		SET total_count = :total_count
	");

	// Na mnou vyznačené místo jako "named placeholder" vložím o jedna zvýšený počet zhlédnutí
	$query->execute( ['total_count' => $total_count + 1] );

	// Reset polozky v DB
	if ( isset( $_GET['reset'] ) && $_GET['reset'] == 1 ) {
		$query = $db->prepare( 'UPDATE visitors
							    SET total_count = :total_count' );

		$query->execute( ['total_count' => 1 ] );

		header( "Location: " . $_SERVER['PHP_SELF'] );
	}

?>



<?php include_once 'partials/header.php'; ?>

<div class="visitors">
	<h1>Počítadlo</h1>
	<h2>Celkový počet zhlédnutí stránky</h2>
	<p class="visitors-count">
		<?php echo $result->total_count; ?>
	</p>
	<p class="visitors-reset">
		<a href="type-db.php?reset=1">Reset</a>
	</p>
</div>

<?php include_once 'partials/footer.php'; ?>
