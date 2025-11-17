<?php

declare(strict_types=1);
    error_reporting(E_ALL);
    ini_set('display_errors','1');

    function preisMitwst(float $netto, float $mwstSatz, float $rabatt =0.0): float{
        $nettoNachRabatt = max($netto - $rabatt, 0.0);
        return $nettoNachRabatt * (1+$mwstSatz);
    }
