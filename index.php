<?php require_once 'inc/config.php'; ?>

<?php include_once 'partials/header.php'; ?>

	<div class="visitors">
		<h1>Ahoj. Vítám tě!</h1>
		<h2>Počítadlo má několik verzí, vyber si</h2>

		<div class="visitors-choose">
			<a href="<?php echo URLROOT; ?>/pocitadlo/type-sessions.php" class="btn btn-primary">Sessions</a>
			<a href="<?php echo URLROOT; ?>/pocitadlo/type-cookies.php" class="btn btn-primary">Cookies</a>
			<a href="<?php echo URLROOT; ?>/pocitadlo/type-db.php" class="btn btn-primary">Database</a>
		</div>
	</div>

<?php include_once 'partials/footer.php'; ?>