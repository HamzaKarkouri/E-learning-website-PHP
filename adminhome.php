<?php 
session_start();
if(empty($_SESSION["id"])){
  header('Location: login.php');
}
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
  <div class="back4">
    <h2>Les participants dans cette classe:</h2>
    <table>
    <tr class="tr1"><th class="thleft">Nom</th>
    <th>Prènom</th>
    <th class="th">E-mail</th>
    <th class="thright">Mot de passe</th></tr><br>
    
  <?php
include_once 'connexiondb.php';
$value=$_SESSION["idclasse"];
$query = "SELECT * FROM register WHERE idclasse='$value'";
$result = mysqli_query($conn,$query);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    
    echo  "<tr class='tr2'><td>".$row['fname']."</td><td>".$row['lname']."</td><td clas='tdmail'>".$row['mail']."</td><td>".$row['password']."</td><td><img class='del2' src='images/del.png' alt='' onclick='dell(".$row['Id'].")'></td></tr><br>";
  }}
  ?>
  </table>
  </div>
<div class="back3">

</div>
<div class="back2">

</div>
<div class='x2'>
<?php
include_once 'connexiondb.php';

$query = "SELECT * FROM register WHERE Id='$value'";
$result = mysqli_query($conn,$query);
if($result){
  while($row = mysqli_fetch_assoc($result)){
echo " <div class='back'><div class='popupp'>
    <form  action='operationn.php' method='POST'>
    <h1>Modifier les informations de ce participant</h1>
  
  <label ><b>Nom</b></label>
  <input class='inviter' type='text' value='".$row['fname']."' name='nom' ><br><label ><b>Prènom</b></label><input class='inviter' type='text' value='".$row['lname']."' name='prenom' ><br><label ><b>E-mail</b></label><input class='inviter' type='mail' value='".$row['mail']."' name='mail' ><br><label ><b>Mot de passe</b></label><input class='inviter' type='text' value='".$row['password']."' name='password' >
  <div class='ann'><input  class='annuler' onclick='annuler()' type='submit' value='Annuler'><input class='annuler' type='submit' name='ajouter' value='Créer'></div>
  
    </form>
  </div></div>";}}
  ?>
  </div>
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
 <div class="box1" onclick="Creer()">
<div class="texto">Créer un Dossier</div>
<div class="pluus1"><img class="pluus" src="images/pluus.png" alt=""></div>
</div>
<div class="box11" onclick="ajouter()">
<div class="texto">Ajouter des élèves</div>
<div class="pluus1"><img class="pluus" src="images/pluus.png" alt=""></div>
</div>
 <div class="boxs">
  <div class="texto1">Les dossiers disponibles:</div>
<div class="boxs3">
<?php
include_once 'connexiondb.php';
$value=$_SESSION["idclasse"];
$query = "SELECT * FROM dossier WHERE idc='$value'";
$result = mysqli_query($conn,$query);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    echo "<div class='box5'><form  action='operationn' method='post'>
   
    <img class='backk' src='images/backk.jpg' alt=''>
    <img class='mod' src='images/points.png' alt='' onclick='points(".$row['idd'].")'>
   
    <input type='submit' value='".$row['nomd']."' id='".$row['idd']."' class='box2' name='dossier'>
   <input type='text' value='".$row['idd']."' id='dossieri' class='box2' name='id'>
    <div class='mod".$row['idd']."' id='pointsmodd'></div> 
  </form></div>";
  }
}

?>

 <!-- <div id='".$row['idd']."' class='box2' onclick='get(".$row['idd'].")'><img class='backk' src='images/backk.jpg' alt=''><img class='mod' src='images/ren.png' alt=''><a class='texto3' href='class.php'>".$row['nomd']."</a> </div> -->
</div></div>



</div>

</div>

<div class="bo">
<div class="account" id="bo">
  <img src="images/prof.png" class="prof">
  <div class="fname">
  <?php 
  

echo $_SESSION['fname']." ".$_SESSION['lname'];
   
   
?>
</div>
<form action="operationn.php" method="post" class="formacc">
<input type="submit" value="Editer votre compte" name="edit" class="edit"></form>
<form action="operationn.php" method="post">
<input type="submit" value="Se déconnecter" name="out" class="out"></form>
</div>
<div class="notif" id="bo"></div><br>
<div class="chat" id="bo"></div>
</div>

<script type="text/javascript" src="adminee.js"></script>
</body>
</html>