<?php 
session_start();

if(@$_SESSION['clickLogin']=="oui" && @$_SESSION['cnx']="pas de connexion"){
  
   //@$message="Mauvais LogIn ou Mot de passe"."<br>";
   ?>
  <script>
  window.alert("Erreur de connexion: Mauvais Login ou Mot de passe");
  </script>
  <?php
  
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENSAT:LogIn</title>
    <link rel="stylesheet" href="Login_style.css">
</head>
<body>
    <center>
        <form  action="includes/authentification.php"  method="post">
            <table>
            <tr><th><img src="pics/5.png"> Veillez vous authentifier</th></tr>
    
                <tr><td><input type="text" name="Username" placeholder="Enter votre UserName" ></td></tr>
                <tr><td><input type="password" name="passwd" placeholder="Enter votre Mot de Passe" ></td></tr>
                <tr><td id="submit" colspan="2"><input type="submit" name="LogIn" value="Log In"></td></tr>
                <tr><th id="signup" colspan=2>Vous n'avez pas de compte? <a href="signup.php">Créer un compte</a></th></tr>
            </table>
        </form>
    </center>

    <?php session_destroy(); ?>
</body>
</html>