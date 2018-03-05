<?php include_once 'partials/header.php' ?>

<?php

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

?>

	<div class="visitors">
		<h1>Počítadlo</h1>
		<h2>Celkový počet zhlédnutí stránky</h2>
		<p class="visitors-count">
			<?php
				echo $result->total_count;
			?>
		</p>
	</div>

<?php include_once 'partials/footer.php' ?>