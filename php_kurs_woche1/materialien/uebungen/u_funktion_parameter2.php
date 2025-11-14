<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Übung 7 »u_funktion_parameter2«</title>
</head>
<body>
     <header><h1>Übung 7 »u_funktion_parameter2«</h1></header>
  <main class="container">
    <?php
            //normale Parameter Übergabe 
            function quadrat($value){
            return $value *= $value;
            }
          
            echo "Das Quadrat von 3 ist: ". quadrat(3) ." <br>";
            echo "Das Quadrat von 3.2 ist: ". quadrat(3.2) ." <br>";
            echo "Das Quadrat von -5 ist: ". quadrat(-5) ." <br>";
            echo "Das Quadrat von  83373 ist: ". quadrat(83373) ." <br>";

        ?>
</main> 
</table>
</body>
</html>

