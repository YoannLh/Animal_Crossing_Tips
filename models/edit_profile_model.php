<?php

	require_once '_classes/Connect.php';

	class Edit extends Connect {

		public function sendAllInformations($pseudo, $image, $passwordCrypted, $mail) {

			$db = $this->dbConnect();

			$reqSend = $db->prepare('UPDATE users SET pseudo = ?, image_profil = ?, password = ? WHERE mail = ?');

			$reqSend->execute(array($pseudo, $image, $passwordCrypted, $mail));

		}
	}

?>