<?php
abstract class Forme {
    abstract public function calculerSurface();
}
class Carré extends Forme {
    private $cote;

    public function __construct($cote) {
        $this->cote = $cote;
    }

    public function calculerSurface() {
        return $this->cote * $this->cote;
    }
}

class Cercle extends Forme {
    private $rayon;

    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    public function calculerSurface() {
        return pi() * $this->rayon * $this->rayon;
    }
}
$moncarre = new Carré(5);
$moncercle = new Cercle(3);

$carre = $moncarre->calculerSurface();
$cercle = $moncercle->calculerSurface();

echo "Surface du carré : $carre \n";
echo "Surface du cercle : $cercle";
?>
