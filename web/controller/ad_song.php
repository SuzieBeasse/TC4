<?php
    // connexion à la base
    include("../model/bdd.php");

        $pictures_dir='../../resources/pictures/';
                if ( isset($_FILES['chanson']) && $_FILES['chanson']['type']=='image/jpeg'):

                 move_uploaded_file($_FILES['chanson']['tmp_name'],$pictures_dir.$_FILES['chanson']['name']);

                else:

                 if ( isset($_FILES['chanson']) ) { 
                   echo 'Le téléchargement est réservé aux fichiers jpeg !';
                 } 

                endif;
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

                    if(isset($_FILES['chanson']))      $cover='/TC4/resources/cover/'.$_FILES['chanson']['name'];
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