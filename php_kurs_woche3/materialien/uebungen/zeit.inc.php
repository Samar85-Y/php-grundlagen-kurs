<?php 

function db_datum_aus($db_datum){
    if(empty($db_datum) || $db_datum === '0000-00-00 00:00:00'){
        return '';
    }

    try{
        $date = new DateTime($db_datum);
        return $date->format('d.m.Y');
    } catch (Exception $e){
        return '';
    }
}