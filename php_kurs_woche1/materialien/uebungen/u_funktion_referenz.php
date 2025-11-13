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
    <title>Übung 11 »u_funktion_referenz«</title>
</head>
<body>
     <header><h1>Übung 11 »u_funktion_referenz«</h1></header>
  <main class="container">
    <?php
         function rechne(&$summe , &$produkt, $a, $b){
            $summe = $a +$b;
            $produkt = $a * $b;

         }
        $a = 5;
        $b = 7;
        $produkt =0;
        $summe = 0;
        rechne($summe, $produkt, $a, $b);
         echo "Die Summe von  $a  und $b ist $summe <br>"; 
         echo "Das Produkt von $a  und $b ist  $produkt <br>";

            
        ?>
</main> 
</table>
</body>
</html>

