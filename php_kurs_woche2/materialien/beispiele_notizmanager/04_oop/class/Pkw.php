<?php
declare(strict_types=1);

require_once 'Kfz.php';

class Pkw extends Kfz{

    function __construct(private string $farbe, private string $marke, private string $typ, private string $motor, private int $ps, private int $speed = 0 ){
       parent::__construct( $marke, $typ, $motor, $ps, $speed );
        

    }

    public function setFarbe($farbe){
        $this->farbe = $farbe;
    }

    public function getFarbe(){
        return $this->farbe;
    }

    function __toString(){
        //Die Methode __toString() der Eltern-Klasse wird erweitert
        return parent::__toString() . "Die Farbe ist $this->farbe.";
    }
}