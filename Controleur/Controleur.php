<?php
require_once 'Modele/Eleves.php'; 

require_once 'Vue/vue.php';
class ControleurEtudiant {
private $Eleve;

public function __construct() {
$this->Eleve = new Eleves();

}
// Affiche les détails sur les élèves:
public function getEtudiant() {
$Etudiant = $this->Eleve->getEleves();

return $Etudiant;

}
public function getView(){
   return $view = new Vue();
}
}
