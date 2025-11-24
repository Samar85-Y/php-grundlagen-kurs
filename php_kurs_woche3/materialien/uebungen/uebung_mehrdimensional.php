<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors", true);


$sportfest = [
    '09:30' => ['Disziplin' => 'Diskuswurf', 'Ort' => 'Nebenplatz', 'Bemerkung' => 'Jugendmeisterschaften'],
    '10:00' => ['Disziplin' => '5-km-Lauf ', 'Ort' => 'Stadion - Laufbahn ', 'Bemerkung' => 'Offener Lauf'],
    '11:00' => ['Disziplin' => 'Halbmarathon', 'Ort' => 'Waldgebiet', 'Bemerkung' => 'Teilnahme ab 18 Jahren'],
    '12:00' => ['Disziplin' => 'Stabhochsprung', 'Ort' => 'Stadion - Stabhochsprunganlage',  'Bemerkung' => 'Nur Frauen '],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../php_kurs_woche3/style/style.css">
    <title>Übung 2: aus Kapitel 5</title>
</head>
<body>
    <header>
        <h1>Sportfest: Startzeiten und Veranstaltungen</h1>
    </header>
    <main class="container">
    <table>
      <thead>
        <tr>
          <th>Beginn</th>
          <th>Disziplin</th>
          <th>Ort</th>
          <th>Bemerkung</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($sportfest as $beginn => $veranstaltung): ?>
          <tr>
            <td><?= $beginn ?></td>
            <td><?= $veranstaltung['Disziplin'] ?></td>
            <td><?= $veranstaltung['Ort'] ?></td>
            <td><?= $veranstaltung['Bemerkung'] ?></td>
          </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  </main>
</body>
</html>