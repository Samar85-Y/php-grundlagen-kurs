<?php
declare(strict_types=1);
/**
 * Aufgabe:
 * 1) Lies eine Punktzahl (0–100) ein (hart codiert oder via GET).
 * 2) Gib eine Note aus (Sehr gut / Gut / OK).
 * 3) Bonus: Farbliche Darstellung per CSS-Klasse.
 */
$punkte = 88; // TODO: anpassen oder via $_GET['p']
$note = "";   // TODO: if/elseif/else setzen

if($punkte >=90){
  $note = "Sehr gut";
}
elseif($punkte >=75){
  $note = "Gut";
}
else{
  $note = "Ok";
}

?>
<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Übung 3 – Notenrechner</title>
  <link rel="stylesheet" href="../style/style.css">
</head>
<body>
  <header><h1>Übung 3 – Notenrechner</h1></header>
  <main class="container">
    <!-- TODO: Punkte/Note ausgeben -->
      <p>Punkte: <?= $punkte ?> -> Note: <strong class="<?= $note ===
    'Sehr gut' ? 'good' : ($note === 'Gut' ? 'ok' : 'bad') ?>" ><?= $note ?></strong></p>
      

  </main>
</body>
</html>
