<?php
 session_start();
 //test d'authentification
 if($_SESSION['valider']!="oui"){
      header("Location:index.php");
}
?>
<?php   
//paramètres d'accès au serveur base de données MySQL    
include_once "includes/connexion.php";

if(isset($_POST['cne']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['ville']) && isset($_POST['email']) && isset($_POST['insérer'])){
    $cne = $_POST['cne'];
    $nom   = $_POST['nom'];
    $prenom   = $_POST['prenom'];
    $adresse  = $_POST['adresse'];
    $ville  = $_POST['ville'];
    $email   = $_POST['email']; 

    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];    
    $folder = './photos/';

// let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder.$filename))  {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }

/* requête à executer */
$sql = "INSERT INTO eleves  VALUES ('','$cne','$nom','$prenom','$adresse','$ville ','$email','$filename', '0');";
$result = mysqli_query($cnx,$sql);

if ($result) {
  header("location:Bienvenu.php");
}else {
    header("location:./inserer.php?error");
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insérer un etudiant</title>
    <link rel="stylesheet" href="inserer_style.css">
</head>
<body>
<center>
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr><th><h1><img src="pics/5.png">Insérer un étudiant</h1></th></tr><br>
                <tr><th><input type="number" name="cne" placeholder="Entrer le CNE de l'étudiant"> <br></th></tr>
                <tr><th><input type="text" name="nom" placeholder="Entrer le Nom de l'étudiant"> <br></th></tr> 
                <tr><th><input type="text" name="prenom" placeholder="Entrer le Prenom de l'étudiant"> <br></th></tr>
                <tr><th><input type="text" name="adresse" placeholder="Entrer l'adresse de l'étudiant"> <br></th></tr>
                <tr><th><input type="text" name="ville" placeholder="Entrer la ville de l'étudiant"> <br></th></tr>
                <tr><th><input type="text" name="email" placeholder="Entrer l'Email de l'étudiant"> <br></th></tr>
                <tr><th class="photo">Enter la photo de l'étudiant:<input type="file" name="photo"><br></th></tr>
                <tr><th colspan="2"> <input class="inserer" type="submit" name="insérer" value="Insérer"> 


            </table>
        </form>
    </center>
</body>
</html>
