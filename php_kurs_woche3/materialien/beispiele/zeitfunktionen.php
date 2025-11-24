<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeit-Funktionen</title>
    <link rel="stylesheet" href="../../../php_kurs_woche3/style/style.css">

</head>
<body>
    <header>
        <h1>Zeitfunktionen</h1>
        
    </header>
    <main class="container">
        <h2><code>mktime()</code></h2>
        <p>Syntax:<code>mktime(Std, Min, Sek, Monat, Tag, Jahr)</code></p>
        <?php 
            $tag = 15;
            $monat = 1;
            $jahr = 1969;

            $start = mktime(0, 0, 0, $monat, $tag, $jahr);
            $diff = time() - $start;

        ?>
        <p><b><?= (floor($diff / 86400)) ?> Tage </b> liege 
        zwischen heute (<?= date('d.m.Y') ?>) und dem <?= date('d.m.Y', $start) ?>.</p>

        <h2><code>microtime()</code></h2>
        <p>Liefert die Anzahl der Millisekunden laut UTC-Zeitstempel.</p>
        <p>Zum Vergleich <code>time()</code><?= time() ?></p>
        <p><strong>Variante 1:</strong>ohne Parameter <?= microtime() ?> . </p>
        <p><strong>Variante 2:</strong>mit Parameter <?= microtime(true) ?> . </p>


        <h3>Beispiel: Berechnung Quadratwurzel von  1 - 1.000.000</h3>

        <?php 
        $start = microtime(true);
        for ($i = 1; $i <= 1000000; $i++) {
            $quadratwurzel = sqrt($i);
        }
        $ende = microtime(true);
       
        ?>
        <p>Ausführungsdauer: <?= $ende - $start ?> Sekunden.</p>


        <h2><code>checkdate()</code></h2>
        <p>Prüft ein übergebenes Datum auf Richtigkeit.</p>

        <form action="<?= $_SERVER['SCRIPT_NAME']; ?>" method="post">
            <p>Geben Sie ein beliebiges Datum im Format TT.MM.JJJJ ein:</p>
            <input type="date" name="datum" size="10" maxlength="10">
            <p><button type="submit">Prüfen</button></p>
        </form>
           
        <?php
         //Prüfen ob das Formular gesendet wurde
        if( ! empty($_POST)){

            $date = explode('-', $_POST['datum']);

            if( ( count($date) !=3) || (! checkdate((int)$date[1], (int)$date[2], (int)$date[0]))): ?>
             
             <p><?= $_POST['datum'] ?> ist <b>kein</b> korrektes Datum.</p>
            <?php else: ?>
                <p><?= $_POST['datum'] ?> ist ein korrektes Datum.</p>
            <?php endif;
        }
        ?>
    </main>
</body>
</html>