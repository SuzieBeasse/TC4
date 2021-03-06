<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Chanson</title>
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
                $req = $bdd->prepare('SELECT * FROM chansons WHERE ID=:id');
                $req->execute(array('id' => $_GET['ID']));
                $donnees=$req->fetch();
            ?>
        
            <h1 class="col-md-offset-1"> <?php echo $donnees['Titre']; ?> </h1> 
            
            <p class="col-md-offset-1">
                <?php echo $donnees['VideoYoutube']; ?>
            </p>
            
            <h1 class="col-md-offset-1"> Informations relatives à la chanson </h1>
            <p>
                <ul class="col-md-offset-1">
                    <li>Interprète : <?php echo $donnees['Interprete']; ?></li>
                    <li>Album : <?php echo $donnees['Album']; ?></li>
                    <li>Année de sortie : <?php echo $donnees['AnneeDeSortie']; ?></li>
                    <li>Genre :  <?php echo $donnees['Genre']; ?></li>
                    <li>Pays d origine :  <?php echo $donnees['Pays']; ?></li>
                </ul>
            </p>
            <?php  
                $req->closeCursor()
            ?>
            <h1 class="col-md-offset-1"> Tags </h1>
                <div class="col-md-offset-1">
                    <?php include ("../../controller/get_tag.php");?>        
                </div>
                                
                <div class="row col-md-offset-1">
                    </br>
                    <form class="col-md-4 " action="../../controller/tag.php" method="post">
                        <div class="form-group">
                            <label for="tagName">Ajouter un tag</label>
                            <input type="hidden" name="songId" value="<?php echo $_GET['ID']?>">
                            <input type="text" class="form-control" id="tagName" placeholder="Entrez le nom du tag" name="tagName">
                        </div>
                        <button type="submit" class="btn btn-default">Ajouter</button>
                    </form> 
                 </div>
            
        </section> 
    </body>
</html>