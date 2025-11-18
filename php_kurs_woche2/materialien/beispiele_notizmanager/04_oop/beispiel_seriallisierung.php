<?php
    
    declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', true);

require_once __DIR__ . '/class/Raumschiff.php';

if(file_exists('Raumschiffstat.dat')){
    //Objekt Status einlesen
    $s = file_get_contents('Raumschiffstat.dat');
    $enterprise =unserialize($s);

}else{
$enterprise = new Raumschiff('U.S.S Enterprise', 'NCC 1701');
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serialisierung</title>
</head>
<body>
    <header>
        <h1>Serialisierung</h1>
    </header>
    <main class="container">
        
        <p><?= $enterprise ?></p>
        <?php $enterprise->setEntferung(25) ?>
        <p><?= $enterprise ?></p>

        <?php 
        $s= serialize($enterprise);
        echo '<pre>', var_dump($s), '</pre>';

        file_put_contents('Raumschiffstat.dat', $s);


         ?>
         <p>Objekte wurde serialiert und gespeichert.</p>
    </main>
</body>
</html>