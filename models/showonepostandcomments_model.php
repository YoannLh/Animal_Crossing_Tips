<?php

	include_once '_classes/Connect.php';

	class ShowOnePostAndComments extends Connect {

		public function getAllPost($id) {

			$db = $this->dbConnect();

			$actualPost = $db->prepare('SELECT id, title, post FROM posts WHERE id = ?');
			$actualPost->execute(array($id));

			return $actualPost->fetch();

		}

		public function postNewComment($post, $comment, $author) {

			$db = $this->dbConnect();

			$reqComment = $db->prepare('INSERT INTO comments(id_post, comment, author) VALUES (?, ?, ?)');
			$reqComment->execute(array($post, $comment, $author));

		}

		public function getAndShowAllCommentsByPost($id) {

			$db = $this->dbConnect();

			$allComments = $db->prepare('SELECT id, id_post, comment, author, datecomment
										FROM comments
										WHERE id_post = ?
										ORDER BY id DESC');

			$allComments->execute(array($id));

			return $allComments->fetchAll();

		}

		public function sendReportComment($id_reported_comment) {

			$db = $this->dbConnect();

			$reqComment = $db->prepare('UPDATE comments SET reported = 1 WHERE id = ?');
			$reqComment->execute(array($id_reported_comment));

		}

		public function deleteComment($id_deleted_comment) {

			$db = $this->dbConnect();

			$reqComment = $db->prepare('DELETE FROM comments WHERE id = ?');
			$reqComment->execute(array($id_deleted_comment));

		}

		public function getContentForEditingPost($id_post) {

			$db = $this->dbConnect();

			$reqEditPost = $db->prepare('SELECT id, title, post FROM posts WHERE id = ?');
			$reqEditPost->execute(array($id_post));

			$_SESSION['edit_post'] = $reqEditPost->fetch();

		}

		public function deletePost($id_post) {

			$db = $this->dbConnect();

			$reqDeletePost = $db->prepare('DELETE FROM posts WHERE id = ?');
			$reqDeletePost->execute(array($id_post));
	
		}

		public function deleteCommentByIdPost($id_post) {

			$db = $this->dbConnect();

			$reqDeleteComment = $db->prepare('DELETE FROM comments WHERE id_post = ?');
			$reqDeleteComment->execute(array($id_post));
		}
	}

?>