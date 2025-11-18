<?php 
class Punkt{
    private $x;
    private $y;

    public function __construct($x =0, $y=0){
        $this->x =$x;
        $this->y =$y;
    }

    public function __toString(){
        return "(" . $this->x . " / " . $this->y . ")";
    }

    public function verschieben($a, $b){
         $this->x +=$a;
         $this->y +=$b;
    }

    
}
