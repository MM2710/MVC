<?php
 session_start();
 //test d'authentification
 if($_SESSION['valider']!="oui"){
      header("Location:index.php");
     
 }
 require_once('Modele/Eleves.php');
 $student= new Eleves();
 try {
     $result=$student->getEleves();
     require_once("Vue/VueAcceuil.php");
     }
     catch (Exception $e) {
     echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
     }


 
?>

