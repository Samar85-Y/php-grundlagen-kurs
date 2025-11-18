<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', true);
require_once __DIR__ . '/Tier.php';
require_once __DIR__ . '/Haustier.php';

class Hund implements Tier, Haustier{
    public function __construct(private string $name, private string $rasse)
    {
        //
    }

    public function getRasse(){
        return $this->rasse;
    }

    public function getName(){
        return $this->name;
    }
    public function __toString(){
        return "$this->name ist ein $this->rasse.";
    }

}