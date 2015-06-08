<?php
    include("../model/bdd.php");

    $newName = $_POST['newName'];
    $oldName = $_POST['Name'];

    $r = $bdd->prepare('SELECT * FROM tag WHERE name = :name');
    $r->execute(array(
        'name' => $oldName));
    $resultat = $r->fetch();
    $idTag=$resultat['id'];

    $req = $bdd->prepare('UPDATE tag SET name = :name WHERE id=:id');
    $req->execute(array(
        'name' => $newName,
        'id'=>$idTag));

     header("Location: /TC4/index.php"); /* Redirect browser */
    exit();

?>