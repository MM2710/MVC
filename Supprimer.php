<?php
 session_start();
 //test d'authentification
 if($_SESSION['valider']!="oui"){
      header("Location:index.php");
     
 }
 include_once("includes/connexion.php");
 if(isset($_POST['cne']) && isset($_POST['id']) && isset($_POST['supprimer'])){
    

   $id=$_POST['id'];
   $cne=$_POST['cne'];

     $query="DELETE FROM eleves WHERE ID_eleve='$id'  and CNE='$cne' ;";

     $result=mysqli_query($cnx,$query);
     if ($result) {
        header("location:Bienvenu.php");
      }else {
          echo "problem query";
          //header("location:./Supprimer.php?error");
      }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un étudiant</title>
    <link rel="stylesheet" href="supprimer_style.css">
</head>
<body>
    <center>
        <form action="" method="post">
            <table>
                <tr><th><h1><img src="pics/5.png">Supprimer un étudiant</h1></th></tr>
                <tr><th><input type="number" name="id" placeholder="Enter l'ID de létudiant à supprimer"></th></tr>
                <tr><th><input type="text" name="cne" placeholder="Enter le CNE de létudiant à supprimer"></th></tr>
                <tr><th><input class="supprimer" type="submit" name="supprimer" value="Supprimer"></th></tr>
            </table>
        </form>
    </center>
</body>
</html>