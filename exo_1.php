<?php 
class Personne{
    // proprietes
    public $nom;
    public $age;

    // Méthodes
    public function affichierDetails() {
        echo "je m'appelle Adama et j'ai 30 ans.";
    }

    public function __construct($nom, $age){
        $this->nom = $nom;
        $this->age = $age;
    }

    public function getNom(){
        return $this->nom;
    }
    public function getAge(){
        return $this->age;
    }

}
    $personne = new Personne();
    $personne->affichierDetails();
?>