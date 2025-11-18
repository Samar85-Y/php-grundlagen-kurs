<?php 

include_once 'u_oop_punkt.inc.php';

class Linie{
    private $start;
    private $ende;

    public function __construct($start =null, $ende=null){
        
        if($start ===null){
            $this->start =new Punkt(0,0);
        }
        else {
            $this->start =$start;
        }

         if($ende ===null){
            $this->ende =new Punkt(0,0);
        }
        else {
            $this->ende =$ende;
        }
    }

    public function __toString(){
        return  $this->start . " / " . $this->ende;
    }

    public function verschieben($a, $b){
         $this->start->verschieben($a, $b);
         $this->ende->verschieben($a, $b);
    }
}



    

    

