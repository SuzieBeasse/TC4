
    <?php include("../component/bdd.php"); ?>
    
    <?php
        $requete = htmlspecialchars($_POST['requete']); // on crée une variable $requete pour faciliter l'écriture de la requête SQL, mais aussi pour empêcher les éventuels malins qui utiliseraient du PHP ou du JS, avec la fonction htmlspecialchars().

        $query = mysql_query("SELECT * FROM fonctions WHERE nom_fonction LIKE '%$requete%' ORDER BY id DESC") or die (mysql_error()); // la requête, que vous devez maintenant comprendre ;)

        $nb_resultats = mysql_num_rows($query); // on utilise la fonction mysql_num_rows pour compter les résultats pour vérifier par après




        header("Location: /TC4/web/view/page/result.php"); /* Redirect browser */
        exit();

    ?>

