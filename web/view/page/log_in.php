<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Connexion</title>
		<link rel="stylesheet" href="/TC4/resources/css/bootstrap.css" />
       
    </head>
    
    <body>
        <?php include("../component/navbar.php"); ?>
        <h1> Connexion</h1>
        
        <div class="row">
            <form class="col-md-5 col-md-offset-3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                
              <div class="form-group">
                <label for="InputEmail2">Adresse email</label>
                <input type="email" class="form-control" id="InputEmail2" placeholder="Adresse email" name="InputEmail2">
              </div>
              <div class="form-group">
                <label for="InputPassword2">Mot de passe</label>
                <input type="password" class="form-control" id="InputPassword2" placeholder="Mot de passe" name="InputPassword2">
              </div>
              
               <button type="submit" class="btn btn-default">Submit</button>
            </form>    
        </div>
        
        <?php
    // connexion à la base
            try 
            { 
                $bdd = new PDO('mysql:host=localhost;dbname=musique;charset=utf8', 'root', '');
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }

            $email='InputEmail2';
            $password1='InputPassword2';
        
            // Vérification des identifiants
            $req = $bdd->prepare('SELECT id FROM utilisateurs WHERE Email = :Email AND Password = :Password');
            $req->execute(array(
                'Email' => $email,
                'Password' => $password1));

            $resultat = $req->fetch();

            if (!$resultat)
            {
                echo 'Mauvais identifiant ou mot de passe !';
            }

            else
            {
                session_start();
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['Email'] = $email;
                echo 'Vous êtes connecté !';
            }
        ?>
    
    
    
    
    
    
    
    
    </body>
    
    
    
    
</html>