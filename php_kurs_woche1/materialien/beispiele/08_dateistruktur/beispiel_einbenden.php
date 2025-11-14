
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Datein einbenden</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <header>
        <h1>PHP-Datein einbenden mit <code>include</code> bzw. <code>require</code></h1>
    </header>
    <main class="container">
        <?php
            /**
             * 4 Varianten der Einbinding
             * 
             * include    liefert eine Warnung, wenn die einzubindende Datei nicht existiert
             * require    liefert eine Fatal Error, wenn die einzubindende Datei nicht existiert
             * include_once 
             * require_once  unterbinden eine Mehrfaceeinbindung der Datei
             */
            
            require_once ('funktions.inc.php'); // oder ohne klamment

            echo '<p>'. summe(35,7) .'</p>';
        ?>
    </main>
</body>
</html>