<?php 
session_start();
 ?>
<?php


if(isset($_POST["creer"])){
   include_once 'connexiondb.php';
    $nom = $_POST["nameee"];
    $idc=$_SESSION["idclasse"]; 
    $sql = "INSERT INTO dossier (idc,nomd) VALUES ('$idc','$nom')";
     if (mysqli_query($conn, $sql)) {
        header('Location: adminhome.php');
        
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }

     mysqli_close($conn);
}

if(isset($_POST["cours"])){
   include_once 'connexiondb.php';
   $nom = $_POST["nameee"];
   
   $idd=$_SESSION['idd']; 
   $allowedExts = array("pdf");
   $temp = explode(".", $_FILES["file"]["name"]);
   $extension = end($temp);
   $file=$_FILES["file"]["name"];
   move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/pdf/" . $_FILES["file"]["name"]);
   $sql = "INSERT INTO cours (idd,nomcours,filee) VALUES ('$idd','$nom','$file')";
    if (mysqli_query($conn, $sql)) {
       header('Location: class.php');
      
       
    } else {
       echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

if(isset($_POST['dossier'])){
   $_SESSION["idd"]= $_POST["id"];
   header('Location: class.php');
}
if(isset($_POST['dossierx'])){
   $_SESSION["idd"]= $_POST["id"];
   header('Location: classx.php');
}
if(isset($_POST['classes'])){
   $_SESSION["idclasse"]= $_POST["id"];
   header('Location: adminhome.php');
}


if(isset($_POST["comment1"])){
   include_once 'connexiondb.php';
   $comment = $_POST["comment"];
   $idc=$_POST["idcours"];
   $idd=$_SESSION["idd"];
   $fname=$_SESSION["fname"];
   $lname=$_SESSION["lname"];
   $sql = "INSERT INTO comments (idd,idc,comment,fname,lname) VALUES ('$idd','$idc','$comment','$fname','$lname')";
    if (mysqli_query($conn, $sql)) {
       header('Location: cours.php');
      
       
    } else {
       echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

if(isset($_POST["out"])){
   session_unset();
   header('Location: login.php');
}

if(isset($_POST["edit"])){
   
   header('Location: edit.php');
}
if(isset($_POST["class"])){
   include_once 'connexiondb.php';
    $nom = $_POST["nameee"];
    $idc=$_SESSION["id"]; 
    $image="class.jpg";
    $sql = "INSERT INTO classe (idc,nom,imag) VALUES ('$idc','$nom','$image')";
     if (mysqli_query($conn, $sql)) {
        header('Location: classes.php');
        
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }

     mysqli_close($conn);
}
if(isset($_POST["ajouter"])){
   include_once 'connexiondb.php';
   $nom = $_POST["nom"];
   $prenom = $_POST["prenom"];
   $mail = $_POST["mail"];
   $password = $_POST["password"];
   $idc=$_SESSION["idclasse"];  
   $type="1";
   $sql = "INSERT INTO register (fname,lname,mail,password,type,idclasse) VALUES ('$nom','$prenom','$mail','$password','$type','$idc')";
    if (mysqli_query($conn, $sql)) {
       header('Location: adminhome.php');
       
    } else {
       echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

if(isset($_POST["modifier"])){
   include_once 'connexiondb.php';
   $nom = $_POST["lname"];
   $prenom = $_POST["fname"];
   $mail = $_POST["mail"];
   $_SESSION["fname"] =$prenom;
   $_SESSION["lname"] =$nom;
   $_SESSION["mail"] =$mail;
   $sql = "UPDATE register SET fname='$prenom', lname='$nom', mail='$mail' WHERE Id='".$_SESSION['id']."'";
   if (mysqli_query($conn, $sql)) {
     
      header('Location: edit.php');
      
   } else {
      echo "Error: " . $sql . ":-" . mysqli_error($conn);
   }

   mysqli_close($conn);
}
if(isset($_POST["modifierpass"])){
   include_once 'connexiondb.php';
   $password = $_POST["password"];
   $new = $_POST["newpass"];
   $new1 = $_POST["newpass1"];
    
   if($password==$_SESSION["password"]){
   $sql = "UPDATE register SET password='$new' WHERE Id='".$_SESSION['id']."'";
   if (mysqli_query($conn, $sql)) {
     
      header('Location: edit.php');
      
   } else {
      echo "Error: " . $sql . ":-" . mysqli_error($conn);
   }

   mysqli_close($conn);
}}
if(isset($_POST["supclass"])){
   include_once 'connexiondb.php';
   $e = $_POST["e"];
   $sql = "DELETE FROM classe WHERE id='$e'";
   if (mysqli_query($conn, $sql)) {
     
      header('Location: classes.php');
      
   } else {
      echo "Error: " . $sql . ":-" . mysqli_error($conn);
   }

   mysqli_close($conn);}

   if(isset($_POST["supdossier"])){
      include_once 'connexiondb.php';
      $e = $_POST["e"];
      $sql = "DELETE FROM dossier WHERE idd='$e'";
      if (mysqli_query($conn, $sql)) {
        
         header('Location: adminhome.php');
         
      } else {
         echo "Error: " . $sql . ":-" . mysqli_error($conn);
      }
   
      mysqli_close($conn);}

      if(isset($_POST["supcours"])){
         include_once 'connexiondb.php';
         $e = $_POST["e"];
         $sql = "DELETE FROM cours WHERE idcours='$e'";
         if (mysqli_query($conn, $sql)) {
           
            header('Location: class.php');
            
         } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
         }
      
         mysqli_close($conn);}
         if(isset($_POST["modclass"])){
            include_once 'connexiondb.php';
            $nom = $_POST["nom"];
            
   $file=$_FILES["file"]["name"];
   move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/image/" . $_FILES["file"]["name"]);
            $e = $_POST["e"];
            $sql = "UPDATE classe SET nom='$nom' WHERE id='$e'";
            if (mysqli_query($conn, $sql)) {
              
               header('Location: classes.php');
               
            } else {
               echo "Error: " . $sql . ":-" . mysqli_error($conn);
            }
         
            mysqli_close($conn);}
            if(isset($_POST["modcours"])){
               include_once 'connexiondb.php';
               $nom = $_POST["nom"];
               $file = $_POST["file"];
               $e = $_POST["e"];
               $sql = "UPDATE dossier SET nomd='$nom' WHERE idd='$e'";
               if (mysqli_query($conn, $sql)) {
                 
                  header('Location: adminhome.php');
                  
               } else {
                  echo "Error: " . $sql . ":-" . mysqli_error($conn);
               }
            
               mysqli_close($conn);}
               if(isset($_POST["supparticipant"])){
                  include_once 'connexiondb.php';
                  $e = $_POST["e"];
                  $sql = "DELETE FROM register WHERE Id='$e'";
                  if (mysqli_query($conn, $sql)) {
                    
                     header('Location: adminhome.php');
                     
                  } else {
                     echo "Error: " . $sql . ":-" . mysqli_error($conn);
                  }
               
                  mysqli_close($conn);}
                  if(isset($_POST['courss'])){
                     $_SESSION['idcours']=$_POST['idcours'];
                     header('Location: cours.php');
                  }
?>