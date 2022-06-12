<?php 

abstract class Model {

      protected function executerRequete($sql, $params = null) {
                  if ($params == null) {
                  $resultat = $this->getBdd()->query($sql); // exécution directe
                  }
                  else {
                  $resultat = $this->getBdd()->prepare($sql); // requête préparée
                  $resultat->execute($params);
                  }
                  return $resultat;
                  }
                  
      protected function getBdd(){
                  $bdd = new PDO('mysql:host=localhost;dbname=ensatdb;charset=utf8', 'root', '');
                  return $bdd;
            }
}
?>