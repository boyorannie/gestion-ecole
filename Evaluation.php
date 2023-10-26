<?php

class Evaluation{

    private $nomEvaluation;
    private $infoProfesseur;
    private $dateEvaluation;
    private $duree;

 
public  function __construct($nomEvaluationEnvoye, $infoProfesseurEnvoye, $dateEvaluationEnvoye, $dureeEnvoye) {
 
    $this->nomEvaluation=$nomEvaluationEnvoye;
    $this->infoProfesseur=$infoProfesseurEnvoye;
    $this->dateEvaluation=$dateEvaluationEnvoye;
    $this->duree=$dureeEnvoye;

}

 function afficherEvaluation(){
    echo " Evaluation n°1, titre $this->nomEvaluation, fait par le professeur : $this->infoProfesseur, à la date $this->dateEvaluation, durée $this->duree";
 }


 public function getNomevaluation(){
    return $this->nomEvaluation;
 }
     
 public function getInfo(){
     return $this->infoProfesseur;
  }
      
  public function getDate(){
     return $this->dateEvaluation;
  }

  public function getDuree(){
    return $this->duree;
 }


}

$evaluation1= new Evaluation("Prise en Main PHP-POO", "Samba KANE- DEV-BACKEND", "25/10/20023","2h");
$evaluation1->afficherEvaluation();


?>