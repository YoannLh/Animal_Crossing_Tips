<!DOCTYPE html>
<html lang="fr" style="scroll-behavior: smooth">
	<head>

	    <?php include_once 'includes/head.php'; ?>

	</head>

	<body>

	    <!-- CONTENU -->
	    <?php 

			include_once 'views/includes/insert_header.php';

			insertHeader();

		?>

		<section class="section_profile">
			<div class="profile flex" style="margin-bottom: 25px">
				<div style="margin: auto">
					<img src="assets/images/empty_profile.png" alt="photo_de_profil_vide" style="height: 100px">
				</div>
			</div>
			<div class="profile flex">
				<div style="margin: auto">
					<p>Pseudo: <?= $_SESSION['pseudo'] ?> </p>
					<p>Rang: <?= $_SESSION['rank'] ?> </p>
					<p>Mail: <?= $_SESSION['mail'] ?> </p>
					<p>Mot de passe: ***** </p>
				</div>
			</div>
			<form method="post" class="modifyProfile">
			<input 
				class="btn btn-link" 
				type="submit" 
				name="edit_profile" 
				value="Modifier le profil"
			/>
		</form>
		</section>
		

		<?php include_once 'views/includes/footer.php'?>

	</body>
</html>