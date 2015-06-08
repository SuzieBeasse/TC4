<body>
    <?php include("../model/bdd.php"); ?>
    <?php 

            session_start();


            // Suppression des variables de session et de la session

            $_SESSION = array();

            session_destroy();
    
        header("Location: /TC4/index.php"); /* Redirect browser */
        exit();

    ?>

</body>

