<?php

	require_once '_classes/Connect.php';

	class EditedProfile extends Connect {

		public function getAllNewsInfos() {

			$db = $this->dbConnect();

			$reqAllNewsInfos = $db->prepare('SELECT pseudo, image_profil, rank FROM users WHERE mail = ?');
			$reqAllNewsInfos->execute(array($pseudo, $image, $rank, $mail));

			return $reqAllNewsInfos->fetchAll();
		}
	}

?>