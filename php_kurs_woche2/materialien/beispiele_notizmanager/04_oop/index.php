<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', true);
require_once __DIR__ . '/class/Note.php';
$notes =[
  new Note( 1, 'Erster Eintrag', 'OOP macht PHP stukturierter'),
  new Note( 2, 'Zweiter Eintrag', 'Klassen kapseln Daten & Verhalten.'),
  new Note( 3, 'Dritter Eintrag', 'Eigenschaften einer Klasse die Sichtbarkeit <code>private</code>.'),
  
];

$newNote = new Note(4, 'Vieter Eintrag', 'Objekte lassen sich Klonen');
$clonedNote = clone $newNote;

$copiedNote = Note::makeCopy($newNote, 6, 'Sechster Eintrag', 'Dieser Eintrag wurde kopiert.');

?><!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>OOP Beispiel</title>
  <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
<header><h1>OOP – Klasse Note</h1></header>
<main class="container">
  <?php foreach($notes as $n) : ?>
    <article class= "post">
      <h2><?= htmlspecialchars($n->getTitle()) ?></h2>
      <p><?= nl2br(htmlspecialchars($n->getContent())) ?></p>
    </article>
    <?php endforeach; ?>
    

    <p><?= $notes[0]; ?></p>
    <p><?= $newNote; ?></p>
    <p><?= $clonedNote; ?></p>
    <p><?= $copiedNote; ?></p>
</main>
</body>
</html>
