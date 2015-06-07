<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Accueil</title>
		<link rel="stylesheet" href="resources/css/bootstrap.css" />
        <link rel="stylesheet" href="resources/css/style.css" />
    </head>
    <header>
        <?php include("web/view/component/navbar.php"); ?>
        <?php include("web/view/component/bdd.php"); ?>
    </header>
	<body>
        <h1> Centrale Sound</h1>
        <p>
        <h2> Top 200 </h2>
            <?php 
                $reponse = $bdd->query('SELECT * FROM chansons');
                while ($donnees = $reponse->fetch())
                {?> 
        
                        
                        <ul class="media-list">
                              <li class="media">
                                <div class="media-left">
                                  <a href="/TC4/web/view/page/song.php?ID=<?php echo $donnees['ID']?>">
                                    <img class="media-object" src="<?php echo $donnees['Pochettes']?>" alt="Cover">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><?php echo $donnees['Titre']?></h4>
                                </div>
                              </li>
                        </ul>
                    
               <?php 
                }
                $reponse->closeCursor();
                ?>

            
           
                
        
        </p>
    </body>
</html>