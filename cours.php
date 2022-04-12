<?php 
session_start();
if(empty($_SESSION["idd"])){
  header('Location: adminhome.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="classs.css">
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
 <div class="barr"><a href="#"><img class="image1"src="images/logo.png" alt=""></a><input  type="text" placeholder="Recherche"> 
 
 <div class="acc"><img onclick="chat()" class="image2"src="images/chat.png" alt=""><img onclick="notif()" class="image2"src="images/notif.png" alt=""><img id="compte" onclick="account()" class="image2"src="images/user.png" alt=""></div>
 
 <div class="boxs">
  <div class="texto1"></div>
<div class="boxs3">
  
<?php
include_once 'connexiondb.php';
$value=$_SESSION['idcours'];
$query = "SELECT * FROM cours WHERE idcours='$value'";
$result = mysqli_query($conn,$query);
if($result){
  
  while($row = mysqli_fetch_assoc($result)){
    
    
    
   
   $string=$row['filee'];
   
    echo "<h1 class='h11'>".$row['nomcours']."</h1>";
        if( $string[strlen($string)-1]=="t" || $string[strlen($string)-1]=="f"){
       echo "<div id='".$row['idcours']."' class='box5'><img class='pdf' src='images/pdf.png' ><a href='uploads/pdf/".$row['filee']."'>".$row['filee']."</a> </div>";
      }
    else if( $string[strlen($string)-1]=="4" ){
      echo "<div id='".$row['idcours']."' class='box5'><img class='pdf' src='images/video.png' ><a href='uploads/pdf/".$row['filee']."'>".$row['filee']."</a></div>";
     }
     else if( $string[strlen($string)-1]=="r" ){
      echo "<div id='".$row['idcours']."' class='box5'><img class='pdf' src='images/rar.png' ><a href='uploads/pdf/".$row['filee']."'>".$row['filee']."</a> </div>";
     }
     else{
      echo "<div id='".$row['idcours']."' class='box5'><img class='pdf' src='images/file.png' ><a href='uploads/pdf/".$row['filee']."'>".$row['filee']."</a></div>";
    
     } 
     echo "<form action='operationn.php' class='addcom' method='post'><label >Ajouter votre commentaire</label><br>
<input type='text' class='comment' name='comment' placeholder='Ajouter votre commentaire......'> <br>
<input type='submit' value='Envoyer' name='comment1' class='comment1'>
<input type='text' value='".$row['idcours']."' name='idcours' class='idcours'>
</form>";
$queryy = "SELECT * FROM comments WHERE idd=".$_SESSION['idd']." AND idc=".$row['idcours']."";
$resultt = mysqli_query($conn,$queryy);
if($resultt){
  echo "<div class='comment0'>";
  while($roww = mysqli_fetch_assoc($resultt)){
echo "<div class='comment3'><div class='comm'><img src='images/prof.png' class='profcomm'>
<div class='namecomm'>".$roww['fname']." ".$roww['lname']."</div></div><br>".$roww['comment']."</div>";
   }
   echo "</div>";
  
}
  
}

}

?>

</div></div>

</div>




</div>
<div cla></div>
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

<script type="text/javascript" src="class.js"></script>
</body>
</html>