<?php
include 'erreurs.php';
require_once 'auto/autoload.php';
session_start()?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>Bio-Relai</title>
        <link rel="icon" href="images/search-icon.png">
		<style type="text/css">
			@import url(styles/BioRelai.css);
		</style>
	</head>
	<body>
		<?php
			include_once 'controleurs/controleurPrincipal.php';
		?>
	</body>
</html>
