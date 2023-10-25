<?php
interface interfaceprofesseur{
    public function evaluationEtudiant($date);

}

class Etudiants{
protected  $nom;
protected  $prenom;
protected $matricule;
public $dateNaissance;

public function __construct($nomEnvoye,$prenomEnvoye,$matriculeEnvoye,$dateNaissanceEnvoye) {
    $this->nom= $nomEnvoye;
    $this->prenom= $prenomEnvoye;
    $this->matricule= $matriculeEnvoye;
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

public function getNom(){
   return $this->nom;
}
    
public function getPrenom(){
    return $this->prenom;
 }
     
 public function getMatricule(){
    return $this->matricule;
 }
 public function String(){
    
 }
public function setNom(){
    if ( ! is_string($this->nom)) {
        throw ("Mettez une chaine de caractere");
    }
        
} 
 
public function setPrenom(){
    if ( ! is_string($this->prenom)) {
        throw ("Mettez une chaine de caractere");
    }
}
public function setMatricule(){
    if ( ! is_string($this->matricule)) {
        throw ("Mettez une chaine de caractere");
    }
        

} 
 
}


class Professeur extends Etudiants implements interfaceprofesseur{
    
    private  $voiture;
    private $salaire;
    private $specialite;
    public $date;
   

    public function __construct($nomEnvoye,$prenomEnvoye,$matriculeEnvoye,$dateNaissanceEnvoye,$voitureEnvoye, $salaireEnvoye, $specialiteEnvoye) {
        parent::__construct ($nomEnvoye,$prenomEnvoye,$matriculeEnvoye,$dateNaissanceEnvoye);{

            $this->voiture = $voitureEnvoye;
            $this->salaire = $salaireEnvoye;
            $this->specialite = $specialiteEnvoye;
            
        }
           
    }

    public function Presentation()
    {
        echo  "Salut, je suis professeur, je m’appelle $this->nom $this->prenom avec un matricule $this->matricule, je suis née le $this->dateNaissance, je possede une voiture $this->voiture, j’ai comme salaire $this->salaire FCFA, spécialisé dans le domaine de l’informatique et de la programmation $this->specialite ";
    }
    public function getNom(){
        return $this->nom;
     }
         
     public function getPrenom(){
         return $this->prenom;
      }
          
      public function getMatricule(){
         return $this->matricule;
      }
      
      
    public function   evaluationEtudiant($date){
        $this->date=$date;
        echo "la date d'evaluation est $this->date";
    }

    

}


 



$Etudiant1= new Etudiants("Abdourahmane", "GUEYE", "01233", "22/10/2000" );
 
$Etudiant1->Presentation();
$Etudiant1->faireCours();
$Etudiant1->faireEvaluation();

$professeur1= new Professeur(" Samba", "KANE", "001x", "11/09/1986", "Oui", "3.000.000 ", "DEV-BACK");
$professeur1-> Presentation();
$professeur1->evaluationEtudiant("30/10/2023");

?>






















































































































































































































































































