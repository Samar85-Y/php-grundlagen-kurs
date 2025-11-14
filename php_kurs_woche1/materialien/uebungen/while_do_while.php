<?php
declare(strict_types=1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Übung 3: Kontrollstrukturen in PHP: while und do-while</title>
</head>
<body>
    <h1>Übung 3: Kontrollstrukturen in PHP: while und do-while</h1>
    <?php
        $zahl = 1;
         echo '<p> while-Schleife Startwert 1 <br>';
            while($zahl <= 5){
                echo "$zahl<br>";
                $zahl ++;
            }
            
            echo '</p>';
        
    ?>
    <h1>Übung 3: Kontrollstrukturen in PHP: while und do-while</h1>
    <?php
        $zahl = 20;
         echo '<p> while-Schleife Startwert 20 <br>';
            while($zahl <= 20){
                echo "$zahl<br>";
                $zahl ++;
            }
            
            echo '</p>';
        
    ?>
</body>
</html>