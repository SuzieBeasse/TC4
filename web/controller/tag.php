<?php
    include("../model/bdd.php");

    $tagName = $_POST['tagName'];
    $songId = $_POST['songId'];
    

    //Create tag
    $req = $bdd->prepare('INSERT INTO tag (name) VALUES (:name)');
    $req->execute(array('name' => $tagName));
    $req->closeCursor();
    

    //Get tag id
    $r = $bdd->prepare('SELECT * FROM tag WHERE name= :name');
    $r->execute(array('name' => $tagName));
    $idTag = $r->fetch();
    $r->closeCursor();



    //Insert <tag / song> into song_tag table
    $re = $bdd->prepare('INSERT INTO song_tag (idSong, idTag) VALUES (:idSong, :idTag)');
    $re->execute(array(
        'idSong' => $songId,
        'idTag'=> $idTag['id']));
    $re-> closecursor();

    //Redirect user
    header("Location: /TC4/web/view/page/song.php?ID=$songId"); /* Redirect browser */
    exit();
?>