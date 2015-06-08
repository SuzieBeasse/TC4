<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/TC4/index.php">Accueil</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li><a href="#">Link</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search" action="/TC4/web/view/page/result.php" method="post">
        <div class="form-group" >
          <input type="text" name="search" class="form-control" placeholder="Rechercher un titre">
        </div>
        <button type="submit" class="btn btn-default" >Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
          <?php 
                session_start();
if (isset($_SESSION['Email']) ){  ?>
                    <li><a href="/TC4/web/view/page/user.php">Profil</a></li>
                    <li><a href="/TC4/web/controller/deconnect.php">Se déconnecter</a></li> 
          <?php } 
                    else { ?>          
                    <li><a href="/TC4/web/view/page/log_in.php">Se connecter</a></li>
                    <li><a href="/TC4/web/view/page/register.php">Créer un compte</a></li>
          <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>