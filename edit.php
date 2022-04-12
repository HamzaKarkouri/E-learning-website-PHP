<?php 
session_start();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminhomee.css">
    <link rel="icon" type="image/png" href="images/logo.png" />
    

    <title>OpenCourse</title>
</head>
<header>
</header>
<body class="bodyy">
  <div class="x">
  
  </div>
  <div class="bar">
 
  <div class="barr2">
<ul>
  <li><a class="active" href="#home"><img class="image1" src="images/menu.png" alt=""></a></li>
  <li class="nav"><a href="#news"><img class="imgg" src="images/dash.png" alt=""><span >Dashboard</span></a></li>
  <li><a href="#contact"><img class="imgg" src="images/course.png" alt=""><span>My courses</span></a></li>
  <li><a href="#about"><img class="imgg" src="images/cal.png" alt=""><span>Calendrier</span></a></li>
</ul>
</div>
 <div class="barr"><a href="#"><img class="image1"src="images/logo.png" alt=""></a><input style="font-family: 'Font Awesome 5 Brands';" type="text" placeholder="&#xf002; Recherche"> 
 
 <div class="acc"><img onclick="chat()" class="image2"src="images/chat.png" alt=""><img onclick="notif()" class="image2"src="images/notif.png" alt=""><img id="compte" onclick="account()" class="image2"src="images/user.png" alt=""></div>

 
  <div class="texto1">Modifiez votre profile:</div>
  <div class="edit2"><form action="operationn.php" method="post" >
<label class="editlabel">Nom</label>
<input type="text" value="<?php echo $_SESSION['lname'];?>" class="editinput" name="lname"><br>
<label class="editlabel">Prènom</label>
<input type="text" value="<?php echo $_SESSION['fname'];?>" class="editinput2" name="fname"><br>
<label class="editlabel">E-mail</label>
<input type="text" value="<?php echo $_SESSION['mail'];?>" class="editinput3" name="mail"><br>
<input type="submit" value="Enregistrer" name="modifier" class="editbutton">
  </form></div>
<div class="edit3"><form action="operationn" method="post">
  <label class="texto2">Modiez votre mot de passe:</label><br>
  <label >Mot de passe actuel</label>
  <input type="text" class="editinput4" name="password"><br>
  <label >Nouveau mot de passe</label>
  <input type="text" class="editinput5" name="newpass"><br>
  <label >Confirmer le mot de passe</label>
  <input type="text" class="editinput6" name="newpass1"><br>
  <input type="submit" value="Enregistrer" name="modifierpass" class="editbutton">
</form></div>

  

</div>

</div>

<div class="bo">
<div class="account" id="bo">
  <img src="images/prof.png" class="prof">
  <div class="fname">
  <?php 
  

  echo $_SESSION['fname']." ".$_SESSION['lname'];
     
     
  ?>
<form action="operationn.php" method="post" class="formacc">
<input type="submit" value="Editer votre compte" name="edit" class="edit"></form>
<form action="operationn.php" method="post">
<input type="submit" value="Se déconnecter" name="out" class="out"></form>
</div>
<div class="notif" id="bo"></div><br>
<div class="chat" id="bo"></div>
</div>

<script type="text/javascript" src="admine.js"></script>
</body>
</html>