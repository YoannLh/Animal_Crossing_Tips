<!DOCTYPE html>
<html lang="fr" style="scroll-behavior: smooth">

	<head>

	    <?php include_once 'views/includes/head.php'?>

	    <title><?= ucfirst($page) ?></title>
	</head>

	<body>

	    <?php 

			include_once 'views/includes/insert_header.php';

			insertHeader();

		?>

	    <h1>Erreur 404 ! Cette page n'existe pas !</h1>

	    <?php include_once 'views/includes/footer.php'?>

	</body>
</html>
