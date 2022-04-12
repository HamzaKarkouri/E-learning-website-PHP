document.querySelector(".nav").style.backgroundColor="#555";
function Creer(){
    bar= document.querySelector(".bar");
   
  
    document.querySelector(".x").innerHTML=`<div class="back"><div class="popup">
    <form  action="operationn.php" method="POST">
    <h1>Nouveu dossier</h1>
  
  <label for="namee"><b>Le nom du dossier</b></label>
  <input  type="text" placeholder="Dossier sans tite" name="nameee" >
  <div class="ann"><input  class="annuler" onclick="annuler()" type="submit" value="Annuler"><input class="annuler" type="submit" name="creer" value="Créer"></div>
  
    </form>
  </div></div>`;
  
  }
  function ajouter(){
    bar= document.querySelector(".bar");
   
  
    document.querySelector(".x").innerHTML=`<div class="back"><div class="popupp">
    <form  action="operationn.php" method="POST">
    <h1>Inviter des participants</h1>
  
  <label ><b>Nom</b></label>
  <input class="inviter" type="text" placeholder="Nom" name="nom" ><br><label ><b>Prènom</b></label><input class="inviter" type="text" placeholder="Prènom" name="prenom" ><br><label ><b>E-mail</b></label><input class="inviter" type="mail" placeholder="E-mail" name="mail" ><br><label ><b>Mot de passe</b></label><input class="inviter" type="text" placeholder="Mot de passe" name="password" >
  <div class="ann"><input  class="annuler" onclick="annuler()" type="submit" value="Annuler"><input class="annuler" type="submit" name="ajouter" value="Créer"></div>
  
    </form>
  </div></div>`;
  
  }
function annuler(){
    document.querySelector(".x").innerHTML=``;
    document.querySelector(".back2").innerHTML=``;
}
function account(){
    if(document.querySelector(`.account`).style.display == "block"){
        document.querySelector(`.account`).style.display = "none";
    }
    else{
        document.querySelector(`.chat`).style.display = "none";
        document.querySelector(`.notif`).style.display = "none";
    document.querySelector(`.account`).style.display = "block";
}

}
function notif(){
    if(document.querySelector(`.notif`).style.display == "block"){
        document.querySelector(`.notif`).style.display = "none";
    }
    else{
        document.querySelector(`.account`).style.display = "none";
        document.querySelector(`.chat`).style.display = "none";
    document.querySelector(`.notif`).style.display = "block";
    }
} 
function chat(){
    if( document.querySelector(`.chat`).style.display == "block"){
        document.querySelector(`.chat`).style.display = "none";
    }
    else{
        document.querySelector(`.account`).style.display = "none";
        document.querySelector(`.notif`).style.display = "none";
    document.querySelector(`.chat`).style.display = "block";
    }
}
var s;
function points(s){
    if(document.querySelector(`.mod${s}`).innerHTML==``){
    document.querySelector(`.mod${s}`).innerHTML=`<div class='pointsmod'><a   class="pointsupprimer" onclick="confirmer(${s})">     Supprimer</a>
    <a   class="pointmodifier" onclick="modifier(${s})">     Modifier</a> <img src="images/del.png" class="del"alt=""><img class="renn"src="images/ren.png" alt=""></div>`;
}
else{
    document.querySelector(`.mod${s}`).innerHTML=``;
}
}
var e;
function confirmer(e){
    document.querySelector(".back2").innerHTML=`<div class="back"><div class="popup2">
    <form  action="operationn.php" method="POST">
    <h2>Voulez-vous vraiment supprimer ce dossier?</h2>
  
  
  
  <div class="ann"><input  class="annuler" onclick="annuler()" type="submit" value="Annuler"><input class="annuler" type="submit" name="supdossier" value="Supprimer"></div>
  <input type="text" value="${e}" name="e" class="e"> 
    </form></div></div>`
}
var t;
function modifier(t){
    document.querySelector(".back2").innerHTML=`<div class="back"><div class="popup3">
    <form  action="operationn.php" method="POST">
    <h2>Modifiez les informations du dossier</h2>
  
    <label ><b>Changer l'image</b></label>
    <input type="file"  name="file" ><br>
    <label ><b>Changer le nom</b></label>
    <input type="text"  name="nom" >
  <div class="ann"><input  class="annuler" onclick="annuler()" type="submit" value="Annuler"><input class="annuler" type="submit" name="modcours" value="Confirmer"></div>
  <input type="text" value="${t}" name="e" class="e"> 
    </form></div></div>`
}
function dell(t){
    document.querySelector(".back2").innerHTML=`<div class="back"><div class="popup2">
    <form  action="operationn.php" method="POST">
    <h2>Voulez-vous vraiment supprimer ce participant?</h2>
  
  
  
  <div class="ann"><input  class="annuler" onclick="annuler()" type="submit" value="Annuler"><input class="annuler" type="submit" name="supparticipant" value="Supprimer"></div>
  <input type="text" value="${t}" name="e" class="e"> 
    </form></div></div>`
}

function modd(t){
    document.querySelector(".x2").style.display=`block`;
    
}

