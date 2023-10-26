<?php


class Etudiants{
protected  $nom;
protected  $prenom;
protected $matricule;
public $dateNaissance;

public function __construct($nomEnvoye,$prenomEnvoye,$matriculeEnvoye,$dateNaissanceEnvoye) {
    $this->setNom($nomEnvoye);
    $this->setPrenom($prenomEnvoye);
    $this->setMatricule($matriculeEnvoye);
    $this->dateNaissance= $dateNaissanceEnvoye;
 
}

public function Presentation(){
echo "Je m'appelle $this->nom $this->prenom avec un matricule $this->matricule, je suis née le $this->dateNaissance <br>";
}

public function faireCours(){
echo "je fais cours du lundi au samedi <br>";

}
public function faireEvaluation(){
 echo "je dois faire une évaluation le 30/10/2023 <br>";
}
// utilisation du getteur pour accéder aux proprietes de la classe qui sont en protected et (s'ils étaient en privé)
public function getNom(){
   return $this->nom;
}
    
public function getPrenom(){
    return $this->prenom;
 }
     
 public function getMatricule(){
    return $this->matricule;
 }
// FONCTION SET() permet de modifier le nom, le prenom et le matricule
public function setNom($nom){
    if ( is_string($nom) && strlen($nom)> 0 && strlen($nom)> 25) {
        $this->nom=$nom;
    }else{
        throw new Exception("le nom doit etre en chaine de caractère");
        
    }
        
} 
 
public function setPrenom($prenom){
    if ( is_string($prenom) && strlen($prenom)> 0 && strlen($prenom)> 25 ) {
        $this->prenom=$prenom;
    }
    else{
        throw new Exception("le prenom doit etre une chaine de caractere");
    }
        
        
    
}
public function setMatricule($matricule){
    if (is_string($matricule) && strlen($matricule)> 0 && strlen($matricule)> 10) {
        $this->matricule=$matricule;
    }
        else {
            throw new Exception("le matricule doit etre une chaine de caractère", );
            
        }

} 
 
}



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


$Etudiant1= new Etudiants("Abdou", "GUEYE", "01233", "22/10/2000" );
 //$Etudiant1->setNom("leye"); permet de modifier le nom
 
$Etudiant1->Presentation();
$Etudiant1->faireCours();
$Etudiant1->faireEvaluation();





?>






















































































































































































































































































