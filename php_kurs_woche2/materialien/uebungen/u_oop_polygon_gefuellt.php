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
    <title>Gefüllte Polygone</title>
</head>
<body>
    <header>
        <h1>Übung »u_oop_polygon_gefuellt</h1>
    </header>
    <main class="container">
    <?php
        include_once "u_oop_polygon_gefuellt.inc.php";
        $polygonGefuellt1 = new PolygonGefuellt(
        array(new Punkt(3.5,1), 
        new Punkt(-2, 6.5), 
        new Punkt(1.5, -3.5)), 
        "Rot"
        );
        echo "$polygonGefuellt1<br>"; 
        $polygonGefuellt1->verschieben(0.5, 3.5);
        echo "$polygonGefuellt1<br>"; 
        $polygonGefuellt1->faerben("Blau"); 
        echo "$polygonGefuellt1<br>";
    ?>


    
    </main>
</body>
</html>

