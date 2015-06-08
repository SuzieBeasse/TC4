<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Accueil</title>
		<link rel="stylesheet" href="resources/css/bootstrap.css" />
        <link rel="stylesheet" href="resources/css/style.css" />
    </head>
	<body>
        <header>
            <?php include("web/view/component/navbar.php"); ?>
            <?php include("web/model/bdd.php"); ?>
            <div >
                <img class="logo" src="/TC4/resources/pictures/centrale_sound.jpg" alt="Centrale Sound">
                
            </div>
        </header>
        
        <section>
            
                    
            <p>
            <h2> Top 200 </h2>
                <?php 
                    $reponse = $bdd->query('SELECT * FROM chansons ORDER BY Score DESC');
                    while ($donnees = $reponse->fetch()) {
                ?> 
            
                    <ul class="media-list col-md-offset-3">
                          <li class="media">
                            <div class="media-left">
                              <a href="/TC4/web/view/page/song.php?ID=<?php echo $donnees['ID']?>">
                                <img class="media-object cover" width="74px" height="74px" src="<?php echo $donnees['Pochettes']?>" alt="Cover">
                              </a>
                            </div>
                            <div class="media-body">
                              <h4 class="media-heading title"><?php echo $donnees['Titre']?></h4>
                            </div>
                          </li>
                    </ul>

                <?php 
                    }
                    $reponse->closeCursor();
                ?>
            </p>
        </section>
    </body>
</html>