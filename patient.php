<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="patient.css">
    <title>Document</title>
</head>
<body>
<header><h1 class="logo"><a class="" href="portail.php">
    <img src="home.png" alt="admin" class=ico ></a> DETAILS PATIENTS </h1>
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
    <div>
<form action="" method="POST">

            <div class="form-group">
            <div class="group">
                    
                    ID PATIENT<input type="text" name="idservice" required>
                </div><br>
                <div class="group">
                   
                    PRENOM PATIENT<input type="text" name="nomsec" required>
                </div><br>
                <div class="group">
                   
                    NOM PATIENT<input type="text" name="nomsec" required>
                </div><br>
                <div class="group">
                   
                    TELEPHONE PATIENT<input type="tel" name="telsec" required>
                </div><br>
                <div class="group">
                   
                    AGE<input type="email" name="emailsec" required>
                </div><br>
                <div class="group">
                GENRE
                <select name="  GENRE" id="">
                        <option value="">MASCULIN</option>
                        <option value="">FEMININ</option>      
                </select>
               </div><br>
                <div class="group">
                    ADRESSE<input type="email" name="emailsec" required>
                </div><br>
                <div class="group">
                <input type="submit" value="AJOUTER">
            </div> 
            </div> 
</form>
<div class="rech"><h1>Rechercher un Patient</h1><input type="text" name='rech'>
</div>
 </nav>
</body>
</html>