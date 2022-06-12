<?php
 session_start();
 //test d'authentification
 if($_SESSION['valider']!="oui"){
      header("Location:index.php");
     
 }
 include_once("includes/connexion.php");

if(isset($_POST['cne2']) && isset($_POST['id2']) &&
 isset($_POST['cne1']) && isset($_POST['nom1']) && isset($_POST['prenom1']) && isset($_POST['adresse1']) &&
    isset($_POST['ville1']) && isset($_POST['email1']) && isset($_POST['modifier1'])){
     
    $id1=$_POST['id2'];
    $cne1=$_POST['cne2'];
    $cne = $_POST['cne1'];
    $nom   = $_POST['nom1'];
    $prenom   = $_POST['prenom1'];
    $adresse  = $_POST['adresse1'];
    $ville  = $_POST['ville1'];
    $email   = $_POST['email1']; 

    $filename = $_FILES["photo1"]["name"];
    $tempname = $_FILES["photo1"]["tmp_name"];    
    $folder = 'image'; 

// let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder.$filename))  {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
echo "form no pron modifier";
$query="UPDATE eleves SET CNE='$cne',Nom='$nom ', Prenom='$prenom'
 , Adresse='$adresse',Ville='$ville' ,email='$email', Photo='$filename', etat='0' WHERE ID_eleve='$id1'  and CNE='$cne1' ;";

     $result=mysqli_query($cnx,$query) or die("Erreur au niv query");
     if ($result==true) {
        header("location:Bienvenu.php");
      }else {
          echo "problem query";
          header("location:./Modifier.php?error");
      }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un étudiant</title>
    <link rel="stylesheet" href="Modifier_style.css">
</head>
<body>
<center>
        <form action=" " method="post">
            <table>
                <tr><th><h1><img src="pics/5.png">Modifier un étudiant</h1></th></tr>
                <tr><th><input type="number" name="id2" placeholder="Enter l'ID de létudiant à modifier"></th></tr>
                <tr><th><input type="text" name="cne2" placeholder="Enter le CNE de létudiant à modifier"></th></tr>
                <tr><th><input type="number"  name="cne1" placeholder="Entrer le Nouveau CNE de l'étudiant"> <br></th></tr>
                <tr><th><input type="text" name="nom1" placeholder="Entrer le Nouveau Nom de l'étudiant"> <br></th></tr> 
                <tr><th> <input type="text" name="prenom1" placeholder="Entrer le Nouveau Prenom de l'étudiant"> <br></th></tr>
                <tr><th> <input type="text" name="adresse1" placeholder="Entrer la nouvelle adresse de l'étudiant"> <br></th></tr>
                <tr><th> <input type="text" name="ville1" placeholder="Entrer la nouvelle ville de l'étudiant"> <br></th></tr>
                <tr><th><input type="text" name="email1" placeholder="Entrer le nouveau Email de l'étudiant"> <br></th></tr>
                <tr><th class="photo">Enter la nouvelle photo de l'étudiant:<input type="file" name="photo1"><br></th></tr>
                <tr><th colspan="2"> <input class="inserer" type="submit" name="modifier1" value="Modifier"> 
            </table>
        </form>
    </center>
</body>
</html>