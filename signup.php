<?php
include_once("includes/connexion.php");
//on vérifie que tous les champs sont remplis:
    if(isset($_POST['SignUP'])&&isset($_POST['Username'])&&isset($_POST['passwd'])){

        $user=$_POST['Username'];
        $passwd=$_POST['passwd'];
        $id=$_POST['ID'];


        $query="INSERT INTO comptes( user, passwd) VALUES( '$user','$passwd')";
        $result=mysqli_query($cnx, $query);

        header("Location:http://localhost/ENSAT/index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSAT: Sign Up</title>
    <link rel="stylesheet" href="signup_style.css">
</head>
<body>
<center>
        <form  action=""  method="post">
            <table>
                <tr><th><img src="pics/5.png"> Veillez créer votre compte</th></tr>
                
                <tr><td><input type="text" name="Username" placeholder="Enter votre UserName" ></td></tr>
                <tr><td><input type="password" name="passwd" placeholder="Enter votre Mot de Passe" ></td></tr>
                <tr><td id="signup" colspan="2"><input type="submit" name="SignUP" value="SignUP"></td></tr>
                <tr><th id="login" colspan=2>Vous avez déjàs un compte? <a href="index.php">Accéder à votre compte</a></th></tr>
            </table>
        </form>
    </center>
</body>
</html>