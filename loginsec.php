
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="page1.css">
     <title>SECRETAIRE CONNEXION</title>
</head>
<body>
<div class="left">

                <header role="header">
        <nav class="menu" role="navigation"> 
            <div class="conteneur1"><label class="rhom" for="toggle">&#9776;</label> 
                <input type="checkbox" id="toggle">
                <div class="left">
                    <h1 class="logo">GESTIONNAIRE DES RENDEZ-VOUS D'HOPITAL </h1>
                </div>
           
        </nav>
</header>
<div class="form-group">
            <a class="lien" href="page1.php">RETOUR</a>
                </div>
<form action="portailsec.php" method="POST">
        
                <div class="group">
                  <h3>POTAIL D'AUTHENTIFICATION SECRETAIRE</h3> <br>
                LOGIN  <input type="email" name="login" placeholder="veillez mettre votre login ici" required>
                </div><br>
                <div class="group">
                
                   MOT DE PASSE<input type="password" name="PWD" placeholder="veillez mettre votre mot_passe ici" required>
           </div><br>
                <div class="group">
                <input type="submit" value="SE CONNECTER" name="valider">
            </div> 
</form>
</body>
</html>



