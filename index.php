<html>
<head>
	<title>MAPAQ Progress Checkbox</title>
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>
	<?php 
		$json = file_get_contents( 'data.json' );
		$content = json_decode( $json, true );
	?>
	<main>
		<form action="">
			<?php foreach( $content['categories'] as $c ) { ?>
				<div class="checkbox-progress">
					<fieldset>
						<legend><?php echo $c['title']; ?></legend>
							<?php $total = count( $c['todos'] ); $checked = 0; ?>
							<?php foreach( $c['todos'] as $t) { ?>
								<div class="checkbox-content">
									<input id="<?php echo $t['label']; ?>" type="checkbox" <?php if( $t['value'] ){ echo 'checked="check"'; $checked++; } ?> name="toppings">
									<label for="<?php echo $t['label']; ?>"><?php echo $t['label']; ?></label>
									<span class="checkbox-information-button">?</span>
									<div class="checkbox-information">
										<?php echo $t['info']; ?>
									</div>
								</div>
							<?php } ?>
					</fieldset>
					<?php $percent = number_format( ($checked/$total)*100, 2 ); ?>
					<div class="progress">
						<div class="progress-bar" style="width: <?php echo $percent .'%'; ?>;" role="progressbar" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100">
							<?php echo $percent; ?>
						</div>
					</div>
				</div>
			<?php } ?>
			

			<div id="progress_total" class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
					0%
				</div>
			</div>


			<fieldset>
				<legend>Deja inscrit ?</legend>
				<input type="email" size="30" placeholder="Courriel">
				<input type="password" size="30" placeholder="Mots de passe">
				<button type="submit">Sousmettre</button>
			</fieldset>

			<fieldset>
				<legend>Creer un compte</legend>
				<input type="email" size="30" placeholder="Courriel">
				<input type="password" size="30" placeholder="Mots de passe">
				<button type="submit">Sousmettre</button>
			</fieldset>

		</form>
	</main>

	<script type="text/javascript" src="assets/js/jquery-1.11.0.js"></script>
	<script type="text/javascript" src="assets/js/scripts.js"></script>
</body>
</html>