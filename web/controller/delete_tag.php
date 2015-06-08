<?php
    include("../model/bdd.php");
      //suppression du tag de la table tag  
     $oldName = $_POST['Name'];
     echo $oldName;
     $req = $bdd->prepare('DELETE FROM tag WHERE name=:name');
     $req->execute(array(
        'name' => $oldName));
    
    //Redirection vers la page accueil
    header("Location: /TC4/index.php"); /* Redirect browser */
    exit();


?>