<?php 
session_start();
if(!empty($_SESSION["id"])){
  header('Location: adminhome.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link rel="stylesheet" href="login.css">
    <title>Log in to your class</title>
</head>
<body>
    <div class="container">
    <div class="box1"><img class="image1" src="images/login1.png" alt=""></div></div>
  
    <div class="box2">
        <div class="box3">
            <form action="logg.php" method="POST" class="form">
                <label class="wrong"><?php if(isset($_COOKIE["username"])){echo $_COOKIE["username"];}     ?></label><br>
<Label>Username</Label><br>
<input type="text" placeholder="Username" name="username"><br>
<label class="wrong"><?php if(isset($_COOKIE["password"])){echo $_COOKIE["password"];}     ?></label><br>
<label for="">Password</label><br>
<input type="password" placeholder="Password" name="password" id="passs"><br>
<input type="checkbox" onclick="show()" class="boxx">  Show Password <a class="forgot" href="#">Forgot password?</a>
<input type="submit" value="Login" name="login" class="login"></form>
<div class="line"></div>
<div class="register">Not yet registered ? <a class="create" href="registration">Create your account</a>
</div>
        </div>
        <img src="images/mail.png" alt="" class="mail"><img class="pass" src="images/password.png" alt="">
    </div>
</div>
<script type="text/javascript" src="index.js"></script>
</body>
</html>