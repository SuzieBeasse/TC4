<?php
    include("../model/bdd.php");

    $newName = $_POST['newName'];
    $oldName = $_POST['Name'];

    //select tag in tag table
    $r = $bdd->prepare('SELECT * FROM tag WHERE name = :name');
    $r->execute(array(
        'name' => $oldName));
    $resultat = $r->fetch();
    $idTag=$resultat['id'];

    //change the tag name on the tag table
    $req = $bdd->prepare('UPDATE tag SET name = :name WHERE id=:id');
    $req->execute(array(
        'name' => $newName,
        'id'=>$idTag));

    //Redirect to main page
     header("Location: /TC4/index.php"); /* Redirect browser */
    exit();

?>