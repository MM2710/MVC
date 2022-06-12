<?php
session_start();
//On vérifie que tous les champs sont remplis
if(isset($_POST['Username']) && isset($_POST['passwd']) && isset($_POST['LogIn'])){
@$_SESSION['clickLogin']="oui";
echo "Erreur: Réessayer";
require_once("connexion.php");


$user=$_POST['Username'];
$passwd=$_POST['passwd'];


echo "Erreur. Réessayer";
$sql="SELECT *FROM comptes WHERE user='$user' AND passwd='$passwd';";
$result=mysqli_query($cnx,$sql) or die("Erreur query");
echo "Erreur. Réessayer.";
if($result==False || mysqli_num_rows($result)==0) {
   
     @$_SESSION['cnx']="pas de connexion";
        
    
     header("Location:http://localhost/ENSAT/index.php");
     
  
}
else{
    $_SESSION['valider']="oui";
    header("Location:http://localhost/ENSAT/Bienvenu.php");
}
}
?>