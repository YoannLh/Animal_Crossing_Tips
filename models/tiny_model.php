<?php

	include_once '_classes/Connect.php';

	class Post extends Connect {

		public function checkIfCommentExists($id) {

			$db = $this.dbConnect();

			$reqComment = $db->query('SELECT * FROM posts');
			
			return $reqComment;

		}

		public function postEditedPost($title, $post, $id) {

			$db = $this->dbConnect();

			$reqEditedPost = $db->prepare('UPDATE posts SET title = ?, post = ? WHERE id = ?');
			
			$reqEditedPost->execute(array($title, $post, $id));

		}

		public function postNewPost($title, $post) {

			$db = $this->dbConnect();

			$reqPost = $db->prepare('INSERT INTO posts (title, post) VALUES (?,?)');
			
			$reqPost->execute(array($title, $post));

		}
	}

?>