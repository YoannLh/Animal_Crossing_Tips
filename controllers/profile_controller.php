<?php

	include_once 'functions/checkActionsAndStatus.php';

	checkActionsAndStatus();

	if(isset($_POST['edit_profile'])) {

		header('location: edit_profile');
		exit();
	}

?>