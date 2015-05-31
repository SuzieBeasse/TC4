<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Register</title>
		<link rel="stylesheet" href="/TC4/resources/css/bootstrap.css" />
    </head>
	<body>
        <?php include("../component/navbar.php"); ?>
        <h1>Inscription</h1>
        
        <?php
            if ( isset($_FILES['fichier']) && $_FILES['fichier']['type']=='image/jpeg'):

             move_uploaded_file($_FILES['fichier']['tmp_name'],
               dirname(__FILE__).'/resources/pictures/'.$_FILES['fichier']['name']); ?>

             <p>Vous êtes maintenant inscrit !</p>
             

           <?php else:

             if ( isset($_FILES['fichier']) ) { 
               echo '<div class="error">Le téléchargement est réservé aux fichiers jpeg !</div>';
             } ?>

             <div class="row">
            <form class="col-md-5 col-md-offset-3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="Inputprenom">Prénom</label>
                <input type="text" class="form-control" id="Inputprenom" placeholder="Prénom">
              </div>
              <div class="form-group">
                <label for="InputName">Nom</label>
                <input type="text" class="form-control" id="InputName" placeholder="Nom">
              </div>            
              <div class="form-group">
                <label for="InputEmail1">Adresse email</label>
                <input type="email" class="form-control" id="InputEmail1" placeholder="Adresse email">
              </div>
              <div class="form-group">
                <label for="InputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="InputPassword1" placeholder="Mot de passe">
              </div>
              <div class="form-group">
                <label for="InputFile">Photo de profil</label>
                <input type="file" name="fichier">
               
              </div>
              
              <button type="submit" class="btn btn-default">Submit</button>
            </form>    
        </div>

        <?php endif; ?>
    </body>
</html>