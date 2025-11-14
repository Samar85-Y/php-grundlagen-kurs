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
    <title>Mit externen Datei und Verzeichnisarbeit</title>
</head>
<body>
    <header>
        <h1>Datei und Verzeichnisarbeit</h1>
    </header>
    <main class="container">
        <h2>Datei mit den Dateifunktionen lesen</h2>
        <?php

        $file = 'user.txt';

        // 1. Prüfe, ob der Pfad existiert und ob es sich dabei um Datei handelt
        if(file_exists($file) && is_file($file)){
            //2. Datei öffnen
            $fh = fopen($file, 'r');

            // 3. Schleife über alle Zeilen der Datei
            while( ! feof($fh)){
                // 4. Zeilenweise lesen
                $row = fgets($fh); //liest genau eine Zeile einer Datei
                echo "$row<br>";
            }

            //5. Datei schließen
            fclose($fh);
        }

        ?>

        <h2>Die Funktionen <code>readfile()</code> und <code>file()</code></h2>
        <?php
            
            /**
             *  ? readfile()
             * liest eine Datei komplett und gibt sie ohne weiter Bearbeitungsmöglichkeit direkt im Browser aus
             */
            readfile($file);

            /**
             * ?file()
             * liset ebenfalls eine komlett Datei ein, gibt aber ein zurück in welchem jedes Array-Elemnt eine Zeile dieser Datei repräsentiert
             */

            $filecontent = file($file);
            $i = 1;
            echo '<p>';

            foreach( $filecontent as $row){
            echo 'Zeile ' . $i++ . ': ' . $row . '<br>';
    }
            echo '</p>';
            
        ?>

        <h2>Lesen mit <code>file_get_contents()</code></h2>
        <?php
            
            $content = nl2br(file_get_contents($file));
            echo "<p>$content</p>";  
        ?>

        <h2>In Datei schreiben</h2>

        <?php
            
            $fh = fopen('bestellungen.txt', 'a');
            if($fh === false){
                echo '<p>Die Datei konnte nicht zum geöffnet werden</p>';
                die('<p>Das Programm wird geschlossen</p>');
            }
            $name = 'Donlad Duck';
            $strasse = 'Entweg 35';
            $ort = '45 Entenhausen';
            if(fwrite($fh, "$name\r\n$strasse\r\n$ort\r\n")){
                echo "<p>Folgenden Daten wurden geschrieben: $name, $strasse, $ort</p>";
            
            }
            else{
                echo "<p>Das Schreiben der Daten ist fehgeschrieben.</p>";
            
            }
            fclose($fh);
        ?>

        <h2>Die Funktion <code>file_put_content</code></h2>
            <?php
                
                $file = "text.txt";
                if(file_put_contents($file, "Irgendwelche Daten\r\n", FILE_APPEND)){
                    echo '<p class="good"> Schreiben erfolgreich.</p>';
                }else{
                    echo '<p class="bad"> Schreiben war nicht erfolgreich.</p>';
                }
                
            ?>
    </main>
</body>
</html>