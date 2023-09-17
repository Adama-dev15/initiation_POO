<?php 
class Personne{
    // proprietes
    public $nom;
    public $age;

    // Méthodes
    public function presenter() {
        echo "je m'appelle Adama et j'ai 30 ans.";
    }
}
    $personne = new Personne();
?>