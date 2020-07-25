<?php

	function checkActionsAndStatus() { 

		if(isset($_POST['deconnexion'])) {

			$_SESSION = array();

			header('location: home');
			exit();
		}

		if(isset($_POST['return'])) {

			header('location: home');
			exit();
		}

		if(isset($_POST['profile'])) {

			header('location: profile');
			exit();
		}

		if(isset($_POST['writeNew']) && $_SESSION['rank'] == "admin") {

			header('location: tiny');
			exit();
		}

		if(isset($_POST['moderate']) && $_SESSION['rank'] == "admin") {

			header('location: comment_manager');
			exit();
		}
	}

?>