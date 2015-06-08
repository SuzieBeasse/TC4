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
            <?php

                $pictures_dir='../../../resources/pictures/';
                if ( isset($_FILES['fichier']) && $_FILES['fichier']['type']=='image/jpeg'):

                 move_uploaded_file($_FILES['fichier']['tmp_name'],$pictures_dir.$_FILES['fichier']['name']); 

            ?>
            
            <?php else:

                 if ( isset($_FILES['fichier']) ) { 
                   echo 'Le téléchargement est réservé aux fichiers jpeg !';
                 } ?>
                    <p>La chanson a été ajoutée à la liste</p>
            
            
            <div class="col-md-5 col-md-offset-2"> <h1> Ajouter une chanson</h1>
            </div>
            
            <form class="col-md-5 col-md-offset-3" action="?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="songName">Titre de la chanson</label>
                <input type="name" class="form-control" id="songName" name="songName" placeholder="Ecrire le titre">
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
                <input type="year" class="form-control" id="year" name="year" placeholder="Annee de sortie">
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
                <input type="file"  name="fichier">
                <p class="help-block">Ne téléchargez que des images au format jpg</p>
              </div>
              <div class="form-group">
                    <input type="hidden" name="score" value="<?php echo rand (3, 567);?>">
              </div>
              
              <button type="submit" class="btn btn-default">Ajouter</button>
            </form>
            
             <?php endif; ?>
       <?php
    // On commence par récupérer les champs
            if(isset($_POST['titre']))      $titre=$_POST['Titre'];
            else      $titre="";

            if(isset($_POST['singer']))      $singer=$_POST['singer'];
            else      $singer="";

            if(isset($_POST['album']))      $album=$_POST['album'];
            else      $album="";

            if(isset($_POST['year']))      $year=$_POST['year'];
            else      $year="";

            if(isset($_POST['genre']))      $genre=$_POST['genre'];
            else      $genre="";
            
            if(isset($_POST['video']))      $video=htmlspecialchars($_POST['video']);
            else      $video="";
            
            if(isset($_POST['country']))      $country=$_POST['country'];
            else      $country="";
            
            if(isset($_POST['score']))      $score=$_POST['score'];
            else      $score="";

            if(isset($_FILES['fichier']))      $cover='/TC4/resources/cover/'.$_FILES['fichier']['name'];
            else      $cover="";

            
        
   
            
            
           //On ajoute les infos a la bdd
            $req = $bdd->prepare('INSERT INTO chansons (Titre, Interprete, Album, Genre, AnneeDeSortie, VideoYoutube, Pays, Pochettes, Score) VALUES(:Titre, :Interprete, :Album, :Genre, :AnneeDeSortie, :VideoYoutube, :Pays, :Pochettes, :Score)');
            $req->execute(array(
                'Titre' => $titre,
                'Interprete' => $singer,
                'Album' => $album,
                'AnneeDeSortie' => $year,
                'Genre' => $genre,
                'VideoYoutube'=> $video,
                'Pays' => $country,
                'Pochettes' => $cover,
                'Score' => $score             
                
                ));

            


                
?> 
        
        
        </section>
    </body>
    
</html>