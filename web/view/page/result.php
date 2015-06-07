<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Result</title>
		<link rel="stylesheet" href="/TC4/resources/css/bootstrap.css" />
       
    </head>
    <header> 
        <?php include("../component/navbar.php"); ?>
        <?php include("../component/bdd.php"); ?>
    
    </header>
    
    <body>
         <?php
                $requete = htmlspecialchars($_POST['requete']); 
                // on crée une variable $requete pour faciliter l'écriture de la requête SQL, mais aussi pour empêcher les éventuels malins qui                         utiliseraient du PHP ou du JS, avec la fonction htmlspecialchars().

                $query = "SELECT * FROM chansons WHERE Titre LIKE '%$requete%' ORDER BY ID DESC" 
                $r = $bdd->query($query) or die ('Problème avec la requête '.  $query.'<br/>'.$bdd->errorInfo()[2]);
               

                //$nb_resultats = mysql_num_rows($query); 
                // on utilise la fonction mysql_num_rows pour compter les résultats pour vérifier par après
        ?>
        
        <h3>Résultats de votre recherche</h3>

       

        <?

        while($donnees = $r->fetch()) 
        {

        ?>

        <a href="song.php?ID=<? echo $donnees['ID']; ?>"><? echo $donnees['Titre']; ?></a><br/>

        <?

        } // fin de la boucle

        ?><br/>
    
    
    
    
    
    
    </body>