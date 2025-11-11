<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Schleifen</title>
</head>
<body>
    <header><h1>Schleifen</h1></header>
    <main class="container">
        <h2>1. Die <code>while</code>-Schleife</h2>
        <h3>1.1 kopfgesteuert</h3>

        <?php
            
            $zahl = 10;
            echo '<p>';
            while($zahl <= 100){
                echo "$zahl<br>";
                $zahl +=5;
            }
            
            echo '</p>';
            
        ?>
        <h3>1.2 Fußgesteuert</h3>
         <?php
            
            
            echo '<p>';
            do{
                echo "$zahl<br>";
                $zahl +=5;
            }while($zahl <= 100);
            
            echo '</p>';
            
        ?>

        <h2>2. <code>for</code> -Schleife</h2>
        <?php
            
            for($i = 25; $i >= 10; $i -= 5){
                echo "<p style='font-size: " . $i ."px'> Schriftgröße: $i px</p>";
            }
            
        ?>

        <h2>3. <code>break </code> und <code>continue</code></h2>
        <p> beispiel #1 <br>
        <?php
            
            $budget = 50;
            $einzelpreis =9;
            $menge = 1;

            while($menge <=15){
                $gesamtpreis = $einzelpreis * $menge;
                if($gesamtpreis > $budget){
                    break; //wenn das Budget erschöpft ist: Abbruch
                }
                echo "$menge. Stück: $gesamtpreis EUR <br>";
                $menge++;
            }            
        ?>
</p>
<p>
beispiel #2 <br>
<?php
    
    $z =5;
    for($n = -2; $n <= 2; $n++){
        if($n === 0){
            echo 'Ein Division durch 0 ist nict erlaubt.<br>';
            continue; // es wird zum nächsten Scleifendurchlauft gesprungen.
        }
        $erg = $z / $n;
        echo "$z / $n = $erg.<br>";
    }
    
?>
</p>
</body>
</html>