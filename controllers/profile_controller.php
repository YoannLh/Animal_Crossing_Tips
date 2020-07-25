<?php

	include_once 'functions/checkActionsAndStatus.php';

	checkActionsAndStatus();



	//foncton modfier si apppui bouton edit
	if(isset($_POST['edit_profile'])) {

		header('location: edit_profile');
		exit();
	}



	//demander toutes infos et les afficher

	$identification = new Identification;

	// while($user_identification = $identification->checkIfMailAlreadyExists($mail)) {

	// 	if($user_identification['askingEmailExists'] == $mail) {

	// 		while($compare_password = $identification->getAllInformationsAboutUser($mail)) {

	// 			if($compare_password['password'] == password_verify($password, $compare_password['password'])) {

	// 				$_SESSION['connect'] = 1;
	// 				$_SESSION['pseudo'] = ucfirst($compare_password['pseudo']);
	// 				$_SESSION['rank'] = $compare_password['rank'];

	// 				$_POST['mail'] = "";
	// 				$_POST['passwordIdentification'] = "";

	// 				header('location: home');
	// 				exit();

	// 			} else {

	// 				$mail = "";
	// 				echo "Authentification impossible :/";
	// 				header('location: identification');
			
	// 			}
	// 		}
	// 	}
	// }

?>