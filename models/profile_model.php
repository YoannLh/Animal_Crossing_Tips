<?php

include_once '_classes/Connect.php';

	class Identification extends Connect {

		public function getAllInformationsAboutUser($mail) {

			$db = $this->dbConnect();

			$reqProfile = $db->prepare('SELECT password, pseudo, rank FROM users WHERE mail = ?');
			$reqProfile->execute(array($mail));

			return $reqProfile->fetch();
		}		
	}





//recuperer avatars de base

//modifier infos



	

?>