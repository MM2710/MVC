<?php 

require_once 'Modele.php';

class Eleves extends Model {

public function getEleves(){
            //include_once("includes/connexion.php");
             $cnx=$this->getBdd();
             $result=$cnx->query( "SELECT *FROM eleves");
            
             return $result;
            
            }

}

?>