<?php 
class Personne{
    // proprietes
    private $nom;
    private $age;

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
class Employe extends Personne{
    private $salaire;
    
    public function __construct($nom, $age, $salaire) {
        parent::__construct($nom, $age);
        $this->salaire = $salaire;
    }

    public function getSalaire() {
        return $this->salaire;
    }
}
    $employe = new Employe();
    $employe->affichierDetails();
    $employe->getNom();
    $employe->getAge();
    $employe->getSalaire();
?>