<?php include_once 'partials/header.php' ?>

<?php
	// Zkontroluji, zda přišel GET request na stránku.
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		// Pokud přišel GET request, vytáhnu si z DB současný počet zhlídnutí stránky
		$query = $db->query('SELECT total_count FROM visitors');

		// Uložím si celkový počet do proměnné result jako objekt
		$result = $query->fetch(PDO::FETCH_OBJ);

		// Navýším hodnotu celkového počtu zhlídnutí
		$total_count = ++$result->total_count;

		// Vložím do DB navýšený počet
		$query = $db->query("UPDATE visitors 
							SET total_count = '$total_count'");
	}
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