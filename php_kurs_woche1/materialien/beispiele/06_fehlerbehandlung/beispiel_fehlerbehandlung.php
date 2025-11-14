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
    <title>Fehlerbehandlung</title>
</head>
<body>
    <header>
        <h1>Fehlerbehandlung</h1>
    </header>
    <main class="container">
        <?php

        $x =42;
        // Variable unbekannt
        
        try{
            if(! isset($x)) {
                // Anweisung, wenn die Variable nicht existiert
                throw new Exception('Variable unbekannt');
            }

            echo "<p>Variable: $x</p>";
        } catch( Exception $error){
            echo '<p class= "bad"><b>Uuups:</b>';
            echo $error->getMessage() . '<br>';
            echo 'Weitere mögliche Meldungen</p>';

            echo '<pre>', var_dump( $error ), '</pre>';
        } finally{
            echo '<p class= " \bad \">Ausgabe von Anweisungen, egal ob die Ausnahme geworfen wurde oder nicht.</p>';
        }

        //Division durch 0
        $x = 42;
        $y = 0;
        try{
            if($y === 0){
                throw new Exception('Division von $x : $y nicht erlaubt');
            }

            $z = $x / $y;
            echo "Division: $x / $y = $z<br>";
        }catch (Exception $er){
            echo $er->getMessage() . '<br>';
        }

        //Zugriff auf unbekannte Funktion
        try{
            if( ! function_exists('testFkt')){
                throw new Exception ('<p class= "bad">Funktion "testFkt"
                unbekannt<br>');
            }
            testFkt();
        }catch(Exception $e){
            echo $e->getMessage() . '</p>';
        }

        ?>
    </main>
</body>
</html>