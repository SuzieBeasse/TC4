<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Profil</title>
		<link rel="stylesheet" href="/TC4/resources/css/bootstrap.css" />
        
    </head>
    
    <header> 
        <?php include("../component/navbar.php"); ?>
        <?php include("../component/bdd.php"); ?>
        
    </header>
    
	<body>
        <?php  
            session_start();
            $email=$_SESSION['Email'];
            $query = "SELECT * FROM utilisateurs WHERE Email='$email';";
            $r = $bdd->query($query) or die ('Problème avec la requête '.  $query.'<br/>'.$bdd->errorInfo()[2]);
            $donnees=$r->fetch();
        ?>
        
       
        
                    
                        <img class="img-circle" src="<?php echo $donnees['Photo'] ?>" alt="Photo de profil">
                   
             
                        <h1 ><?php echo $donnees['Prenom'] . ' '. $donnees['Nom'] ?></h1>

              
            
        <div class="col-md-2 col-md-offset-1" >
            <h2> Top perso </h2>
                <p>
                    <ol> 
                        <li>Chanson 1</li>
                        <li>Chanson 2</li>
                        <li>Chanson 3</li>
                        <li>Chanson 4</li>
                        <li>Chanson 5</li>
                        <li>Chanson 6</li>
                        <li>Chanson 7</li>
                        <li>Chanson 8</li>
                        <li>Chanson 9</li>
                        <li>Chanson 10</li>
                    </ol>
                </p>
        
            <h2> Résumé des critiques </h2>
        </div>
	</body>
</html>