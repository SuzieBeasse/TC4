

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
        ?>