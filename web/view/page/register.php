<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Register</title>
		<link rel="stylesheet" href="/TC4/resources/css/bootstrap.css" />
       
    </head>
	<body>
        <header>
            <?php include("../component/navbar.php"); ?>
            <?php include("../../model/bdd.php"); ?>        
        </header>
        
        <section>
            <h1>Inscription</h1>
        
            <?php

                $pictures_dir='../../../resources/pictures/';
                if ( isset($_FILES['fichier']) && $_FILES['fichier']['type']=='image/jpeg'):

                 move_uploaded_file($_FILES['fichier']['tmp_name'],$pictures_dir.$_FILES['fichier']['name']); 

            ?>

                 <p>Vous êtes maintenant inscrit !</p>


               <?php else:

                 if ( isset($_FILES['fichier']) ) { 
                   echo '<div class="error">Le téléchargement est réservé aux fichiers jpeg !</div>';
                 } ?>

            <div class="row">
                <form class="col-md-5 col-md-offset-3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="InputPrenom">Prénom</label>
                    <input type="text" class="form-control" id="InputPrenom" placeholder="Prénom" name="InputPrenom">
                  </div>
                  <div class="form-group">
                    <label for="InputName">Nom</label>
                    <input type="text" class="form-control" id="InputName" placeholder="Nom" name="InputName">
                  </div>            
                  <div class="form-group">
                    <label for="InputEmail1">Adresse email</label>
                    <input type="email" class="form-control" id="InputEmail1" placeholder="Adresse email" name="InputEmail1">
                  </div>
                  <div class="form-group">
                    <label for="InputPassword1">Mot de passe</label>
                    <input type="password" class="form-control" id="InputPassword1" placeholder="Mot de passe" name="InputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="InputFile">Photo de profil</label>
                    <input type="file" name="fichier">

                  </div>

                  <button type="submit" class="btn btn-default">Submit</button>
                </form>    
            </div>       
        
        </section>
        

        <?php endif; ?>
         
        <!-- Ecriture des donnees dans la table utilisateurs-->
         <?php
    // On commence par récupérer les champs
            if(isset($_POST['InputName']))      $nom=$_POST['InputName'];
            else      $nom="";

            if(isset($_POST['InputPrenom']))      $prenom=$_POST['InputPrenom'];
            else      $prenom="";

            if(isset($_POST['InputEmail1']))      $email=$_POST['InputEmail1'];
            else      $email="";

            if(isset($_POST['InputPassword1']))      $password=$_POST['InputPassword1'];
            else      $password="";

            if(isset($_FILES['fichier']))      $photo='/TC4/resources/pictures/'.$_FILES['fichier']['name'];
            else      $photo="";

            
        
   
            
            
           //On ajoute les infos a la bdd
            $req = $bdd->prepare('INSERT INTO utilisateurs(Nom, Prenom, Email, Password, Photo) VALUES(:Nom, :Prenom, :Email, :Password, :Photo)');
            $req->execute(array(
                'Nom' => $nom,
                'Prenom' => $prenom,
                'Email' => $email,
                'Password' => $password,
                'Photo' => $photo
                ));

            


                
?> 
  
    </body>
</html>