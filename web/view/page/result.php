<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Result</title>
		<link rel="stylesheet" href="/TC4/resources/css/bootstrap.css" />
		<link rel="stylesheet" href="/TC4/resources/css/style.css" />
    </head>
    
    
    <body>
        <header> 
            <?php include("../component/navbar.php"); ?>
            <?php include("../../model/bdd.php"); ?>

        </header>
        
        <section>
            <?php
                $requete = htmlspecialchars($_POST['search']); 
                $query = "SELECT * FROM chansons WHERE Titre='".$requete."' ORDER BY Titre DESC"; 
                $r = $bdd->query($query) or die ('Problème avec la requête '.  $query.'<br/>'.$bdd->errorInfo()[2]);
            ?>

            <h3>Résultats de votre recherche</h3>

            <?php
                while($donnees = $r->fetch()) {
            ?>

                <a href="song.php?ID=<?php echo $donnees['ID']; ?>">
                    <?php echo $donnees['Titre']; ?>
                </a>

            <?php 
                }
                $r->closeCursor();
            ?>
        </section>
    </body>
</html>