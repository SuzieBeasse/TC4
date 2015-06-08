<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Modify</title>
		<link rel="stylesheet" href="/TC4/resources/css/bootstrap.css" />
        <link rel="stylesheet" href="/TC4/resources/css/style.css" />

        
    </head>
    <body>
        <header>
            <?php include("../component/navbar.php"); ?>
            <?php include("../../model/bdd.php"); ?>
        </header>
        <section>
            <?php 
                $Name=$_GET['name'];            
            ?>
            
            <h1> Tag <?php echo $Name; ?></h1>
            <h4> Modifier le tag</h4>
                <div class="row">
                    <form class="col-md-4 col-md-offset-3" action="../../controller/modif_tag.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="newName" placeholder="Entrez le nouveau nom du tag" name="newName">
                            <input type="hidden" name="Name" value="<?php echo $Name; ?>">
                        </div>
                        <button type="submit" class="btn btn-default">Modifier</button>
                    </form> 
                 </div>
            <h4> Supprimer le tag</h4>
                <form class="col-md-4 col-md-offset-3" action="../../controller/delete_tag.php" method="post">
                    <input type="hidden" name="Name" value="<?php echo $Name; ?>">
                    <button type="submit" class="btn btn-danger btn-lg">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Supprimer
                    </button>
                </form>
        
        
        </section>
    </body>
 </html>