document.querySelector(".nav").style.backgroundColor="#555";
function Creer(){
    
   
  
    document.querySelector(".x").innerHTML=`<div class="back"><div class="popup">
    <form  action="operationn.php" method="POST" enctype="multipart/form-data">
    <h1>Nouveu dossier</h1>
  
  <label for="namee"><b>Le nom du cours</b></label>
  <input type="text" placeholder="Dossier sans tite" name="nameee" ><br>
  <label ><b>Ajouter le fichier</b></label>
  <input type="file"  name="file" >
  <div ><input  class="annuler" onclick="annuler()" type="submit" value="Annuler"><input class="annuler" type="submit" name="cours" value="Créer"></div>
  
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



var r;
var i;

function display(i){
document.querySelector(`#display${i}`).style.display = "block";

}
function fermer(r){
    document.querySelector(`#display${r}`).style.display = "none";
}
var e;
function confirmer(e){
    document.querySelector(".back2").innerHTML=`<div class="back"><div class="popup2">
    <form  action="operationn.php" method="POST">
    <h2>Voulez-vous vraiment supprimer ce cours?</h2>
  
  
  
  <div class="ann"><input  class="annuler" onclick="annuler()" type="submit" value="Annuler"><input class="annuler" type="submit" name="supcours" value="Supprimer"></div>
  <input type="text" value="${e}" name="e" class="e"> 
    </form></div></div>`
}