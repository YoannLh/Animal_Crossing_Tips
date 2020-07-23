<?php

	if(isset($_POST['deconnexion'])) {

		$_SESSION = array();

		header('location: home');
		exit();
	}

	if(isset($_POST['return'])) {

		header('location: home');
		exit();
	}

	if(isset($_POST['writeNew'])) {

		header('location: tiny');
		exit();
	}

	if(isset($_POST['moderate'])) {

		header('location: comment_manager');
		exit();
	}

	$buttonNoDelete = '<input type="submit" class="btn btn-link buttonNoDelete" 														name="noDeleteComment" value="Ne pas supprimer du fil"
						/>';

	$buttonReportOrDelete = '<button type="submit" class="btn btn-link buttonReportOrDelete" 											name="deleteComment">
								Supprimer
							</button>';

	$nb_reported_comments = 0;

	function showAllReportedComment() { 

		global $buttonNoDelete;

		global $buttonReportOrDelete;

		global $nb_reported_comments;

		$commentManager = new CommentManager;

		foreach($commentManager->getAllReportedComments(1) as $allReportedComments) {

			$nb_reported_comments++;

			$id_comment = $allReportedComments['id'];
			$comment = $allReportedComments['comment'];
			$author = $allReportedComments['author'];
			$date = $allReportedComments['datecomment']; ?>

			<ol class="list-unstyled mb-0">

				<li class="comment">
					<p>
						<span class="authorComment">
							<?= $author ?>
						</span> 
						a posté le <?= $date ?> 
					</p>		
					<p>
						<?= $comment ?>
					</p>
						<form method="post">
							<?= $buttonNoDelete ?>
							<?= $buttonReportOrDelete ?>
							<textarea name="id_reported_comment" style="display: none">
								<?= $id_comment ?>
							</textarea>
						</form>
				</li>

			</ol>

		<?php

		}
	}

	function noDeleteComment() {

		if(isset($_POST['noDeleteComment']) && isset($_SESSION['pseudo']) && $_SESSION['rank'] == "admin") {

			$id_no_delete_comment = $_POST['id_reported_comment'];

			$commentManager = new CommentManager;

			$commentManager->noDeleteComment($id_no_delete_comment);

		}
	}

	function deleteComment() {

		if(isset($_POST['id_reported_comment']) && isset($_SESSION['pseudo']) && $_SESSION['rank'] == "admin") {

			$id_deleted_comment = $_POST['id_reported_comment'];

			$commentManager = new CommentManager;

			$commentManager->deleteComment($id_deleted_comment);

		}
	}
		
?>