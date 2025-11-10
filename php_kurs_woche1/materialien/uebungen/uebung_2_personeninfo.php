<?php
declare(strict_types=1);
/**
 * Aufgabe:
 * 1) Lege Variablen für name, alter, stadt an.
 * 2) Gib einen formatierten Satz aus (HTML + CSS).
 * 3) Bonus: Rechne ein Geburtsjahr aus.
 */

$name = "Samar";
$alter = 40;
$stadt ="Erfurt"
?>
<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Übung 2 – Personeninfo</title>
  <link rel="stylesheet" href="../style/style.css">
</head>
<body>
  <header><h1>Übung 2 – Personeninfo</h1></header>
  <main class="container">
    <!-- TODO -->
     <p> Hallo <?= htmlspecialchars($name); ?>, du bist <?= $alter ?> Jahr alt.</p>
     <p> Du whonst in <?= $stadt; ?> .</p>
     <p> Geburtsjahr ist: <?=  date("Y") - $alter ?> .</p>
  </main>
</body>
</html>
