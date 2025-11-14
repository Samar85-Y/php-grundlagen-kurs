<?php
    
    declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors',true);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Fehlerbeispiel</title>
</head>
<body>
    <header>
        <h1>Fehler Beispiele</h1>
    </header>
    <main class="container">
        <?php
            
            /**
             * Fehler-Kategorien
             * 
             * ! Fehler (Error, Parse Error, Fatal Error)
             * Schwerwiegende Fehler
             * Brechen das Skript an der Stelle ab, wo der Fehler aufgetreten ist oder führen das Skript überhaupt nict aus
             **/

            /*print_r($i);
            echo "<p>String mit falschen Zeichen.</p>";
            */
            $i =5;
            print_r($i);
            echo "<p>String mit falschen Zeichen.</p>";

            /*$i =5;
            print_r($i);
            echo "<p>String mit " falschen " Zeichen.</p>";
            */

            $i =5;
            print_r($i);
            echo "<p>String mit \" falschen \" Zeichen.</p>";

            /**
             * !Warnung
             * Wichtige Information - möglichst bald beheben.
             * Skript werden trotzdem bis zum Ende ausgeführt.
             */

            echo '<p>Der Wert der Variablen $i ist: ' .$i . '</p>';

            /**
             * ! Notizen
             * Ebenfalls möglichst bald beheben .
             */

            /**
             *  ! Logische Fehler
             * 
             * Kann der Parser nicht erkennen
             */

            $z = 2;

            //Yoda - Notation (1 == $z)
            if($z = 1){ // hier ist es die Fehler. == nicht = 
                echo "<p>Treffer</p>";

            }
            else{
                echo "<p>Leider nicht getroffen.</p>";
            }

        ?>
    </main>
</body>
</html>