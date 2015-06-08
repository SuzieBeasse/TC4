<?php
    include("../view/component/bdd.php");

    $tagName = $_POST['tagName'];
    $songId = $_POST['songId'];

    //Create tag
    $req = $bdd->prepare('INSERT INTO tag (name) VALUES (:name)');
    $req->execute(array('name' => $tagName));
    $resultat = $req->fetch();

    //Get tag id
    //...


    //Insert <tag / song> into song_tag table
    //...
?>