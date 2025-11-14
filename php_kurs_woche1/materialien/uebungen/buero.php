<?php

declare(strict_types=1);
$bezeichnung_tisch = "Schreibtisch"; 
$preis_tisch = 1999.00;
$bezeichnung_stuhl = "Bürostuhl"; 
$preis_stuhl = 589.00;
$bezeichnung_lampe = "Lampe"; 
$preis_lampe= 29.00;
$bezeichnung_pctisch = "Computertisch"; 
$preis_pctisch=999.00;
$netto_gesamt = $preis_tisch + $preis_stuhl + $preis_lampe + $preis_pctisch;
$brutto_gesamt = $netto_gesamt*(1+0.19);
$MWST = 0.19;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Übung 2</title>
</head>
<body>
    <h1>Mit Variablen, Operatoren und Konstanten arbeiten</h1>
    <p>
        <?php
            
            echo "<p> Netto-Gesamtpreis der eingekauften Artikel:  $netto_gesamt EURO </p>";
            echo "<p> Brutto-Gesamtpreis der eingekauften Artikel: $brutto_gesamt EURO </p>";
            echo "<p>Brutto-Preis $bezeichnung_tisch : " . $preis_tisch*(1+0.19) ." Euro.</p>";
            echo "<p>Brutto-Preis $bezeichnung_stuhl : " .$preis_stuhl*(1+0.19)." Euro.</p>";
            echo "<p>Brutto-Preis $bezeichnung_lampe : ".$preis_lampe*(1+0.19)." Euro.</p>";
            echo "<p>Brutto-Preis $bezeichnung_pctisch : ".$preis_pctisch*(1+0.19)." Euro.</p>";
            
        ?>
    </p>
</body>
</html>
