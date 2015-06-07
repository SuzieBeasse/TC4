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

            $email=$_POST['InputEmail2'];
            $password2=$_POST['InputPassword2'];
        
            // Vérification des identifiants
            $req = $bdd->prepare('SELECT id FROM utilisateurs WHERE Email = :Email AND Password = :Password');
            $req->execute(array(
                'Email' => $email,
                'Password' => $password2));

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
                
            }

            header("Location: /TC4/index.php"); /* Redirect browser */
            exit();

    ?>
        ?>