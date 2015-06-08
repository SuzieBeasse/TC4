<?php
    // connexion à la base
    include("../view/component/bdd.php");

    $email=$_POST['InputEmail2'];
    $password2=$_POST['InputPassword2'];

    // Vérification des identifiants
    $req = $bdd->prepare('SELECT id FROM utilisateurs WHERE Email = :Email AND Password = :Password');
    $req->execute(array(
        'Email' => $email,
        'Password' => $password2));

    $resultat = $req->fetch();

    if (!$resultat)
    {
        echo 'Mauvais identifiant ou mot de passe !';
    }

    else
    {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['Email'] = $email;

    }

    header("Location: /TC4/index.php"); /* Redirect browser */
    exit();
?>