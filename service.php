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
                        <div class="ma"><img src="addsev.png" alt="admin" class="foto"><a href="loginadmin.php">AJOUTER</a></div>
                        <div class="ma"><img src="edit.png" alt="medecin" class="foto"><a href="loginmedecin.php">MODIFIER</a></div>
                        <div class="ma"><img src="recherche.jpeg" alt="secretaire" class="foto"><a href=loginsec.php>RECHERCHER</a></div>
                        <div class="ma"><img src="delete.png" alt="secretaire" class="foto"><a href=loginsec.php>SUPPRIMER</a></div>
                    </div>
            </div>
         </nav>
         <div class="left">
             <h1 class="logo">AJOUTER UN SERVICE <a class="" href="admin.php">
             <img src="home.png" alt="admin" class=ico ></a> </h1>
</div>
<div>
<form action="" method="POST">

            <div class="form-group">
                <div class="group">
                ID SERVICE<input type="text" name="idservice" id=""><br>
                NOM SERVICE<input type="text" name="nomservice" required>
                </div><br>
                <div class="group">
                <input type="submit" value="AJOUTER">
            </div> 
</form>
</div>
</body>
</html>