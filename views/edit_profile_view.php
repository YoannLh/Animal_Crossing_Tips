<!DOCTYPE html>
<html lang="fr" style="scroll-behavior: smooth">
	
	<?php include_once 'views/includes/head.php' ?>

	<?php 

		include_once 'views/includes/insert_header.php';

		insertHeader();

	?>

	<body id="body">

		<div class="flex">
			<form class="formInscriptionEtIdentification" method="post">
				<h3>Modifier votre profil</h3>
				<div class="profile flex" style="margin-bottom: 25px">
					<div id="choices">
						<div id="dog">
							<img src="assets/images/dog.jpg" alt="" style="height: 100px">
						</div>
						<div id="cat">
							<img src="assets/images/cat.jpg" alt="" style="height: 100px">
						</div>
						<div id="nook">
							<img src="assets/images/nook.jpg" alt="" style="height: 100px">
						</div>
						<div id="monkey">
							<img src="assets/images/monkey.jpg" alt="" style="height: 100px">
						</div>
						<div id="rabbit">
							<img src="assets/images/rabbit.jpg" alt="" style="height: 100px">
						</div>
					</div>
					<div id="selectProfile" style="margin: auto; height: 100px; width: 100px; border: 1px solid grey; border-radius: 50%; background: url('<?= $_SESSION["image"] ?>'); background-size: 100px">
					</div>
					<div id="selectedProfile" style="margin: auto; display: none; height: 100px; width: 100px; border: 1px solid grey; border-radius: 50%"></div>
				</div>
				<table>
					<tr style="display: none"><td><input name="image" id="image" type="text"></td></tr>
					<tr><td>Nouveau pseudo</td><td><input name="pseudo" type="text"></td></tr>
					<tr><td>Nouveau mot de passe</td><td><input name="password" type="text"></td></tr>
					<tr><td>Répétez votre mot de passe</td><td><input name="password_two" type="text"></td></tr>
				</table>
				<button type="submit">Enregistrer</button>
				<a href="home">Retour au site</a>
			</form>
		</div>

		<?php include_once 'views/includes/footer.php' ?>

		<script type="text/javascript" src="assets/Javascript/managePhoto.js"></script>

	</body>
</html>