<?php
    declare(strict_types=1);
    error_reporting(E_ALL);
    ini_set('display_errors', true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Übung 14 »u_eingabe«, Teil 2</title>
</head>
<body>
     <header><h1>Übung 14 »u_eingabe«, Teil 2</h1></header>
  <main class="container">

  <h2>Ihre Adresse lautet: </h2>
    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $vorname = htmlspecialchars($_POST['vorname']);
        $nachname = htmlspecialchars($_POST['nachname']);
        $strasse = htmlspecialchars($_POST['strasse']);
        $platz = htmlspecialchars($_POST['platz']);
        $ort = htmlspecialchars($_POST['ort']);

        echo "<p>";
        echo $vorname . " " . $nachname . "<br>";
        echo $strasse .  "<br>";
        echo $platz . " " . $ort .  "<br>";
        
        echo "</p>";
    }
    else{
        echo "<p>Keine Daten gefunden.</p>";

    }
        
        ?>     
</main> 

</body>
</html>

