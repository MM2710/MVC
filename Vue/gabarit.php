<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?></title>
    <link rel="stylesheet" href="bienvenu_style.css">
    <script src="Bienvenue.js"></script>
</head>
<body>
<header class="header" id="myHeader" class="sticky">
<nav >
            <img class="logo" src="pics/5.png"></li>
            <li><a href="includes/deconnexion.php">Déconnexion</a></li>
            <li><a href="inserer.php">Insérer un étudiant</a></li>
            <li><a href="modifier.php">Modifier un étudiant</a></li>
            <li><a href="supprimer.php">Supprimer un étudiant</a></li>
            
        </ul>
</nav>
</header>
<div id="contenu">
<?= $contenu ?> <!-- Élément spécifique -->

</div>


</body>