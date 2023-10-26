<?php
include ("classeEtudiant.php");

interface interfaceprofesseur{
    public function evaluationEtudiant($date);

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

    public function setNom($nom){
        if (is_string($nom)) {
            $this->nom=$nom;
            
        }else{
            throw new Exception("le nom doit etre en chaine de caractère");
            
        }
            
    } 
     
    public function setPrenom($prenom){
        if ( is_string($prenom)) {
            $this->prenom=$prenom;
        }
        else{
            throw new Exception("le prenom doit etre une chaine de caractere");
        }
            
            
        
    }
    public function setMatricule($matricule){
        if (is_string($matricule)) {
            $this->matricule=$matricule;
        }
            else {
                throw new Exception("le matricule doit etre une chaine de caractère", );
                
            }
    
    } 
     

}

$professeur1= new Professeur(" Samba", "KANE", "001x", "11/09/1986", "Oui", "3.000.000 ", "DEV-BACK");
$professeur1-> Presentation();
$professeur1->evaluationEtudiant("30/10/2023");

?>