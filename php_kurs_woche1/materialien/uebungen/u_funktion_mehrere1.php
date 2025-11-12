<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Übung 8 »u_funktion_mehrere1«</title>
</head>
<body>
     <header><h1>Übung 8 »u_funktion_mehrere1«</h1></header>
  <main class="container">
    <?php
            
            function mittel($zah1, $zahl2, $zahl3){
                $summe = $zah1 + $zahl2 + $zahl3;
            return $summe / 3;
            }
          
            echo "Der Mittelwert  von 4, 7 und 6 ist: ". mittel(4,7,6) ." <br>";
            echo "Das Mittelwert von 44, 67.5 und 1 ist: ". mittel(44, 67.5,1) ." <br>";
            echo "Das Mittelwert von -5, 0 und -13 ist: ". mittel(-5,0,-13) ." <br>";
            echo "Das Mittelwert von  0.001, 0.0081 und 0.0032 ist: ". mittel(0.001, 0.0081, 0.0032) ." <br>";
            echo "Das Mittelwert von  5,8 und 2 ist: ". mittel(5,8,2) ." <br>";

        ?>
</main> 
</table>
</body>
</html>

