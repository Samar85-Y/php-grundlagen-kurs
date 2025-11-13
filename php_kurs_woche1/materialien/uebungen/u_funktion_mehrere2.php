<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Übung 9 »u_funktion_mehrere2«</title>
</head>
<body>
     <header><h1>Übung 9 »u_funktion_mehrere2«</h1></header>
  <main class="container">
    <?php
            
            function vermerk(string $vorname , string $nachname, string $abteilung){
                $email = $vorname . "." . $nachname . "@" . $abteilung . ".phpdevel.de.";
                echo "Programmteil von ". $vorname . " " . $nachname . ",  Abteilung" . $abteilung  . " <br>";
                echo "Email:" . $email . " <br>";
            
            }
            echo vermerk("Samar", "Yousef", "FE2");
            echo vermerk("Hans", "Heim", "SU3");

        ?>
</main> 
</table>
</body>
</html>

