<?php
    
    declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', true);

require_once __DIR__ . '/class/Pkw.php';
require_once __DIR__ . '/class/Hund.php';
  $opel = new Pkw('blau', 'Opel', 'Corsa', 'Benzin', 125 );  

  $fluffy = new Hund('Fluffy', '');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Vererbung und Schnittestellen</title>
</head>
<body>
    <header>
        <h1>Vererbung und Schnittestellen</h1>
    </header>
    <main class="container">
    <h2>Vererbung</h2>
    <p><?= $opel ?></p>
    <?php
        $opel->setSpeed(80)    
    ?>
    <p><?= $opel ?></p>

    <h2>Schnittestellen</h2>
    <p><?= $fluffy ?></p>
    </main>
</body>
</html>