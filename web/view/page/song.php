<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Chanson</title>
        <link rel="stylesheet" href="/TC4/resources/css/style.css" />
        <link rel="stylesheet" href="/TC4/resources/css/bootstrap.css" />
    </head>
    
    <header>
        <?php include("../component/navbar.php"); ?>
        <?php include("../component/bdd.php"); ?>  
    
    </header>

    <body>
        <?php 
            $info=$_GET['ID']; 
            
        
            $req = $bdd->prepare('SELECT * FROM chansons WHERE ID= :ID');
            $req->execute(array(
                'ID' => $info));
                
            $donnees=$req->fetch()
        ?>
        


        
            <h1> <?php echo $donnees['Titre']?> </h1> 
                
            <p> <?php echo $donnees['VideoYoutube']?></iframe>
                
            </p>
            <h2> Informations relatives à la chanson </h2>
            <p>
                <ul>
                    <li>Interprète : <?php echo $donnees['Interprete']?></li>
                    <li>Album : <?php echo $donnees['Album']?></li>
                    <li>Année de sortie : <?php echo $donnees['AnneeDeSortie']?></li>
                    <li>Genre :  <?php echo $donnees['Genre']?></li>
                    <li>Pays d origine :  <?php echo $donnees['Pays']?></li>
                </ul>
            </p>


            <h2> Critiques </h2>
       
       
        
        
        
    
            
        
               
    
    </body>
</html>