<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Connexion</title>
		<link rel="stylesheet" href="/TC4/resources/css/bootstrap.css" />
       
    </head>
    
    <body>
        <?php include("../component/navbar.php"); ?>
        <?php include("../component/bdd.php"); ?>
        <h1> Connexion</h1>
        
        <div class="row">
            <form class="col-md-5 col-md-offset-3" action="/TC4/web/controller/connect.php" method="post" enctype="multipart/form-data">
                
              <div class="form-group">
                <label for="InputEmail2">Adresse email</label>
                <input type="email" class="form-control" id="InputEmail2" placeholder="Adresse email" name="InputEmail2">
              </div>
              <div class="form-group">
                <label for="InputPassword2">Mot de passe</label>
                <input type="password" class="form-control" id="InputPassword2" placeholder="Mot de passe" name="InputPassword2">
              </div>
              
               <button type="submit" class="btn btn-default">Submit</button>
            </form>    
        </div>
        
        
    
    
    
    
    
    
    </body>
    
    
    
    
</html>