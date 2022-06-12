<?php 
require_once 'Controleur/Controleur.php';
$eleve = new ControleurEtudiant ();
$view= $eleve->getView();
//$view = new Vue();
$view->set_titre('ENSAT: Bienvenue') ; ?>
<?php ob_start(); ?>
    <?php 
    echo "<center>";
    echo "<table class='echotable'>";
    echo"<tr><th colspan='9'><h1>"."La Liste Des Etudiants"."</h1></th></tr>";
    echo "<tr>". "<th>"."ID". "</th>". "<th>"."CNE". "</th>". "<th>"."Nom". "</th>"."<th>"."Prenom"."</th>"."<th>"."Adresse"."</th>"."<th>"."Ville"."</th>".
   "<th>"."Email". "</th>"."<th>"."Photo". "</th>"."<th>"."Etat"."</th>"."</tr>";
    //while( $tab=$result->getEleves() ){
        foreach ($eleve->getEtudiant() as $tab ){
           
        echo "<tr>";
        echo "<td>". $tab['ID_eleve']."</td>";
        echo "<td>". $tab['CNE']."</td>";
        echo "<td>". $tab['Nom']."</td>";
        echo "<td>". $tab['Prenom']."</td>";
        echo "<td>". $tab['Adresse']."</td>";
        echo "<td>". $tab['Ville']."</td>";
        echo "<td>". $tab['email']."</td>";
    
?>
        
        <td> <?php echo'<img src="photos/'.$tab["Nom"].'.png" height="100" width="100">'; ?> </td>
<?php
        
        echo "<td>". $tab['etat']."</td>"; 
        echo "</tr>";
        
        }  
    echo "</table>";
    echo "</center>";
    ?> 
<?php $contenu = ob_get_clean(); ?>
<?php require_once('gabarit.php') ; ?>
