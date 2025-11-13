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
    <title>Übung 12 »u_funktion_einbinden«</title>
</head>
<body>
     <header><h1>Übung 12 »u_funktion_einbinden«</h1></header>
  <main class="container">
    <?php
        //funktion mittelwert
         function  mittelwert(...$zahlen) {
            $summe = array_sum($zahlen);
            $anzahl =count($zahlen);
            return $anzahl > 0 ? $summe / $anzahl : 0;

         }
         //funktion maximum
         function maximum(...$zahlen){
            if(count($zahlen) ==0){
                return 0;
            }

            $max = $zahlen[0];
            foreach($zahlen as $zahl){
                if($zahl > $max){
                    $max = $zahl;
                }
            }
            return $max;
         }
        ?>

        <?php

        echo "Mittelwert von  5, 15, 10 ist <b>" . mittelwert(5, 15, 10) .  "</b><br>"; 
        echo "Maximum von 5, 15, 18 ist <b>"  . maximum(5, 15, 18) . "<b><br>";
                
        ?>
         

            
       
</main> 
</body>
</html>

