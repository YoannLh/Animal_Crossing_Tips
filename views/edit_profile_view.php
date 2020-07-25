<!DOCTYPE html>
<html lang="fr" style="scroll-behavior: smooth">
	
	<?php include_once 'views/includes/head.php' ?>

	<body>

		<div class="flex">
			<form class="formInscriptionEtIdentification" method="post">
				<h3>Modifier votre profil</h3>
				<div class="profile flex" style="margin-bottom: 25px">
					<div style="margin: auto">
						<img src="assets/images/empty_profile.png" alt="photo_de_profil_vide" style="height: 100px">
					</div>
				</div>
				<table>
					<tr><td>Pseudo</td><td><input name="pseudo" type="text"></td></tr>
					<tr><td>Mot de passe</td><td><input mane="password" type="text"></td></tr>
					<tr><td>Répétez votre mot de passe</td><td><input name="second_password" type="text"></td></tr>
				</table>
				<button type="submit">Enregistrer</button>
				<a href="home">Retour au site</a>
			</form>
		</div>

		<?php include_once 'views/includes/footer.php' ?>

	</body>
</html>