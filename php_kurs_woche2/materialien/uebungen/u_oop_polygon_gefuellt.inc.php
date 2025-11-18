<?php 
require_once __DIR__ . '/u_oop_punkt.inc.php';

/* class Punkt{
    private $x;
    private $y;

    public function __construct($x, $y){
        $this->x =$x;
        $this->y =$y;
    }

    public function setXY($a, $b) {
        $this->x += $a;
        $this->y += $b;
    }
    
} */
 

class PolygonGefuellt{

    //private $punkte = array();
    //private $fullfarbe;

    public function __construct(
        private array $punkteArray,
        private string $farben,
        ){
        // $this->punkte =$punkteArray;
        // $this->fullfarbe =$farben;

    }

    public function verschieben($a, $b){
        foreach($this->punkteArray as $p){
            $p-> verschieben($a,$b) ;
            //$p->y +=$b;

        }

    }

    public function faerben($neueFarbe){
        $this->farben = $neueFarbe;
    }

    public function __toString(){
       return implode(' / ', $this->punkteArray) . " / $this->farben";
    }


}



