<?php
    include("../model/bdd.php");
       
     $oldName = $_POST['Name'];
     
    //Fetch the tag id
    $r = $bdd->prepare('SELECT * FROM tag WHERE name = :name');
    $r->execute(array(
        'name' => $oldName));
    $resultat = $r->fetch();
    $idTag=$resultat['id'];

    //delete from song_tag table
    $re = $bdd->prepare('DELETE FROM song_tag WHERE idTag=:idTag');
    $re->execute(array(
        'idTag' => $idTag));
    
    //Redirect to main page
    header("Location: /TC4/index.php"); /* Redirect browser */
    exit();


?>