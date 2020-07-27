<?php

	include_once 'functions/checkActionsAndStatus.php';

	checkActionsAndStatus();

	if (isset($_SESSION['mail']) &&
		!empty($_POST['pseudo']) && 
		!empty($_POST['image']) && 
		!empty($_POST['password']) && 
		!empty($_POST['password_two'])) {

			$mail = $_SESSION['mail'];
			$pseudo = str_secur($_POST['pseudo']);
			$image = str_secur($_POST['image']);
			$password = str_secur($_POST['password']);
			$password_two = str_secur($_POST['password_two']);

			if ($password != $password_two) {

				echo "Vos mots de passe ne sont pas identiques !";

			}

			$edit = new Edit;

			if($password == $password_two) {

				$passwordCrypted = password_hash($password, PASSWORD_DEFAULT);

				$edit->sendAllInformations($pseudo, $image, $passwordCrypted, $mail);

				$_SESSION['image'] = $image;
				$_SESSION['pseudo'] = $pseudo;
				$_SESSION['password'] = $passwordCrypted;

				header('location: profile');
				exit();
			} 

	}

?>










