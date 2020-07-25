<div class="container">
  <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <p class="text-muted" style="margin-top: 17px">Bienvenue <?= $_SESSION['pseudo'] ?></p>
        </div>
        <div class="col-4 text-center">
          <a href="home"><img src="assets/images/logoAC.png" alt="logo"></a> 
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
        <form method="post">
          <button class="btn btn-link" type="submit" name="profile">
            <a>Profil</a>
          </button>
          <button class="btn btn-sm btn-outline-secondary" type="submit" name="deconnexion">Déconnexion</button>
        </form>
      </div>
    </div>
  </header>
</div>
