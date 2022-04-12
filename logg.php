
<?php 
session_start(); ?>

<?php

if(isset($_POST['started'])){
    $maill=$_POST['maill'];
    setcookie("maill",$maill,time()+3);
    header('location: registration.php');
}


if(isset($_POST['register'])){
    include_once 'connexiondb.php';
    $first=$_POST['fname'];
    $last=$_POST['lname'];
    $mail=$_POST['mail'];
    $pass=$_POST['password'];
    $pass2=$_POST['password1'];
    $passchiffré=md5($pass);
    $passchiffré2=md5($pass2);
    $type="0";
    $idc="0";
    if($pass==$pass2){
    $sql = "INSERT INTO register (fname,lname,mail,password,type,idclasse) VALUES ('$first','$last','$mail','$pass','$type','$idc')";
    if (mysqli_query($conn, $sql)) {
       header('Location: login.php');
      
       
    } else {
       echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);}
    else{
        setcookie("confirm","Passwords did not match",time()+1);
        header('location: registration.php');
    }
}

if(isset($_POST['login'])){
    include_once 'connexiondb.php';
    $user=$_POST['username'];
    $passs=$_POST['password'];
    $passchiffré=md5($passs);
    $query = "SELECT * FROM register WHERE mail='$user'";
$result = mysqli_query($conn,$query);
if($result){
  
  while($row = mysqli_fetch_assoc($result)){
    
    
      
          if($passs==$row['password']){
              
            
            
            $_SESSION["fname"] =$row['fname'];
            $_SESSION["lname"] =$row['lname'];
            $_SESSION["mail"] =$row['mail'];
            $_SESSION["password"] =$row['password'];
            
            if($row['type']==0){
              $_SESSION["id"] =$row['Id'];
            header('Location: classes.php');
            }
            else{
              $_SESSION["idx"] =$row['Id'];
                $_SESSION["idclasse"]=$row['idclasse'];
                header('Location: adminhomex.php');
            }
          }
          
          else{
            setcookie("password","Wrong password! try again..",time()+1);
            header('location: login.php');
          }
      }}
      else{
        setcookie("username","Wrong username! try again..",time()+1);
        header('location: login.php');
      }
  }

















?>