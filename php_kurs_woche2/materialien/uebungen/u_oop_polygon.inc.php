<?php 

include_once 'u_oop_punkt.inc.php';

class Polygon{
    private $punkte = array();
 

    public function __construct($punkte = array()){
        
        foreach($punkte as $p){
            if($p instanceof Punkt){
                $this->punkte[] =$p;
            }
        }
    }

    public function getPunkt(Punkt $p){
        $this->punkte[] =$p;
    }

    public function __toString(){
       if(count($this->punkte) ===0){
        return "(Keine Punkte)<br>";
       }
       else{
        $ausgabe = " ";
        foreach($this->punkte as $p){
           $ausgabe .= $p;
        }

       }
       return $ausgabe;
    }

    public function verschieben($a, $b){
        foreach($this->punkte as $p){
            $p->verschieben($a,$b);
        }
    }
}

