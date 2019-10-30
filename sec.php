
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="service.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
        crossorigin="anonymous">
    <title>service</title>
</head>
<body>
<header role="header">
      
</header>
<nav class="menu" role="navigation"> 
            <div class="conteneur1"><label class="rhom" for="toggle">&#9776;</label> 
                 <input type="checkbox" id="toggle">
                    <div class="right">
                        <div class="ma"><img src="addoc.ico" alt="admin" class="foto"><a href="loginadmin.php">AJOUTER</a></div>
                        <div class="ma"><img src="modif.jpeg" alt="medecin" class="foto"><a href="loginmedecin.php">MODIFIER</a></div>
                        <div class="ma"><img src="rech.png" alt="secretaire" class="foto"><a href=loginsec.php>RECHERCHER</a></div>
                        <div class="ma"><img src="sup.png" alt="secretaire" class="foto"><a href=loginsec.php>SUPPRIMER</a></div>
                    </div>
            </div>
</nav>
         <div class="left">
             <h1 class="logo">AJOUTER UN SECRETAIRE <a class="" href="admin.php">
             <img src="home.png" alt="admin" class=ico ></a> </h1>
</div>
<div>
<form action="" method="POST">

            <div class="form-group">
            <div class="group">
                    
                    ID_SECRETAIRE<input type="text" name="idservice" required>
                </div><br>
                <div class="group">
                   
                    PRENOM_SECRETAIRE<input type="text" name="nomsec" required>
                </div><br>
                <div class="group">
                   
                    NOM_SECRETAIRE<input type="text" name="nomsec" required>
                </div><br>
                <div class="group">
                   
                    TELEPHONE_SECRETAIRE<input type="tel" name="telsec" required>
                </div><br>
                <div class="group">
                   
                    EMAIL_SECRETAIRE<input type="email" name="emailsec" required>
                </div><br>
                <div class="group">
                <input type="submit" value="AJOUTER">
            </div> 
            </div> 
</form>
</div>
</body>
</html>
