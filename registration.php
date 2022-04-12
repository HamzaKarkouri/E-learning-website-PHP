<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo.png" />
   <link rel="stylesheet" href="registrationn.css">
    <title>Create your account</title>
</head>
<body>
<div class="container">
    <div class="box1"><img class="image1" src="images/pc.png" alt=""></div></div>
  
    <div class="box2">
        <div class="box3">
            <form action="logg.php" method="POST" class="form">
            <Label>First name</Label><br>
<input type="text" placeholder="Enter your first name..." name="fname"><br>
<Label>Last name</Label><br>
<input type="text" placeholder="Enter your last name..." name="lname"><br>
<Label>E-mail</Label><br>
<input type="email" placeholder="E-mail" name="mail" value=<?php 

if(isset($_COOKIE["maill"])){echo $_COOKIE["maill"];}     ?> ><br>
<label for="">Password</label><br>
<input type="password" placeholder="Password" name="password"><br>
<label class="confirm" ><?php 

if(isset($_COOKIE["confirm"])){echo $_COOKIE["confirm"];}     ?></label><br>
<label for="">Confirm your password</label><br>
<input type="password" placeholder="Confirm password" name="password1"><br>
<br>
<input type="submit" value="Sign up" name="register" class="login"></form>
<div class="line"></div>
<div class="register">Already have an account ? <a class="create" href="login.php">Login</a>
</div>
        </div>
        
    </div>
</div>
</body>
</html>