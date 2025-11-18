<?php

class Raumschiff{
    /**
     * eine klassen Methode ohne Sichtbarkeitsangabe ist
     * immer public
     */

    function __construct(private string $bezeichnung, private string $modell, private int $entfernung =0){
        //
    }

    function setEntferung($entfernung){
        $this->entfernung +=$entfernung;
    }
    function __toString(){
        return "aktulles Raumschiff: $this->bezeichnung ($this->modell): Erdentfernung: $this->entfernung";
    }
}