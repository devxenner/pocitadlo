<?php include_once '_partials/header.php'?>

<?php
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		$query = $db->query('SELECT total_count FROM visitors');
		$result = $query->fetch(PDO::FETCH_OBJ);

		$total_count = ++$result->total_count;
		$query = $db->query("UPDATE visitors 
							SET total_count = '$total_count'");



	}



	//$query = $db->prepare('UPDATE visitors SET total_count :count');
	//$query->execute(['count' => $count])

	//$query = $db->query('INSERT INTO visitors
	//					 VALUES ')

	//$query = $db->query('SELECT total_count FROM visitors');
	//$result = $query->fetch(PDO::FETCH_OBJ);

?>

	<div class="visitors">
		<h1>Pocitadlo</h1>
		<h2>Celkovy pocet</h2>
		<p class="visitors-count">
			<?php
				echo $result->total_count;
			?>
		</p>
	</div>

<?php include_once '_partials/footer.php'?>