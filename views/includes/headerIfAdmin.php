<div class="container">
<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <div style="margin-top: 20px">
          <div style="margin-left: 13px; height: 100px; width: 100px; border: 1px solid grey; border-radius: 50%; background: url('<?= $_SESSION["image"] ?>'); background-size: 100px"></div>
          <p class="text-muted" style="margin-top: 17px">Bienvenue <?= $_SESSION['pseudo'] ?></p>
      </div>
      </div>
      <div class="col-4 text-center">
        <a href="home"><img src="assets/images/logoAC.png" alt="logo" class="imgLogo"></a> 
      </div>
      
      <div class="col-4 flex" style="justify-content: flex-end">
        <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu

                <?php 

                function getAllReportedComments() {

                  $db = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USER, DATABASE_PASSWORD);

                  $reportedComments = $db->prepare('SELECT count(*) as number FROM comments WHERE reported = 1');
                  $reportedComments->execute(array());

                  while($nb_of_reported_comments = $reportedComments->fetch()) {

                    $_SESSION['nb_of_reported_comments'] = $nb_of_reported_comments['number'];

                    if($nb_of_reported_comments['number'] > 0) { 

                      echo $alert = '<div class="alertReportedComments flex"><div style="margin-bottom: 0px">' . $nb_of_reported_comments['number'] . '</div></div>';

                    } else { 

                      echo "";
                    }

                  }
                  
                }

                if($_GET['page'] != 'comment_manager') {

                  getAllReportedComments();
                }

              ?>

              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <form method="post">
                  <button class="btn btn-link" type="submit" name="profile">
                    <a>Profil</a>
                  </button>
                  <button class="btn btn-link" type="submit" name="writeNew">
                    <a>Ecrire un billet</a>
                  </button>
                  <button class="btn btn-link" type="submit" name="moderate">
                    <a>Commentaires <?php echo "(" . $_SESSION['nb_of_reported_comments'] . ")" ?></a>
                  </button>
                  <button class="btn btn-link" type="submit" name="deconnexion">
                    <a>Déconnexion</a>
                  </button>
                </form>
              </div>
            </div>

      </div>
    </div>
  </header>
</div>