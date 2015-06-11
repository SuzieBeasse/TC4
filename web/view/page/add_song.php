<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ajout Chanson</title>
		<link rel="stylesheet" href="/TC4/resources/css/bootstrap.css" />
        <link rel="stylesheet" href="/TC4/resources/css/style.css" />
       
    </head>
    
    <body>
        <header>
            <?php include("../component/navbar.php"); ?>
            <?php include("../../model/bdd.php"); ?>
        </header>
        
        <section>
        
            
            <div class="col-md-5 col-md-offset-2"> <h1> Ajouter une chanson</h1>
            </div>
            
            <form class="col-md-5 col-md-offset-3" action="/TC4/web/controller/ad_song.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="titre">Titre de la chanson</label>
                <input type="name" class="form-control" id="titre" name="titre" placeholder="Ecrire le titre">
              </div>
              <div class="form-group">
                <label for="singer">Interprète</label>
                <input type="singer" class="form-control" id="singer" name="singer" placeholder="Artiste">
              </div>
              <div class="form-group">
                <label for="album">Album</label>
                <input type="album" class="form-control" id="album" name="album" placeholder="Album">
              </div>
              <div class="form-group">
                <label for="year">Année de sortie</label>
                <input type="year" class="form-control"  name="year" placeholder="Annee de sortie">
              </div>
              <div class="form-group">
                <label for="genre">Genre</label>
                <input type="genre" class="form-control" name="genre" id="genre" placeholder="Genre">
              </div>
              <div class="form-group">
                <label for="country">Pays d'origine</label>
                <input type="country" class="form-control" id="country" name="country" placeholder="Ouzbekistan">
              </div>
              <div class="form-group">
                <label for="video">Clip Youtube</label>
                <input type="lien" class="form-control" id="video" placeholder="Lien intégrer de Youtube" name="video">
                <p class="help-block">Veuillez insérer le code disponible dans l'onglet partager/intégrer en dessous de la video sur la page Youtube</p>
              </div>
              <div class="form-group">
                <label for="cover">Photo de l'album</label>
                <input type="file"  name="chanson">
                <p class="help-block">Ne téléchargez que des images au format jpg</p>
              </div>
              <div class="form-group">
                    <input type="hidden" name="score" value="<?php echo rand (3, 567);?>">
              </div>
              
              <button type="submit" class="btn btn-default">Ajouter</button>
            </form>
      
   
        
        </section>
    </body>
    
</html>