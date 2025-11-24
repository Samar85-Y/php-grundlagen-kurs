<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors", true);

$kennzeichen = [
    'B' => 'Berlin',
    'HH' => 'Hamburg',
    'S' => 'Stuttgart',      
];
$kennzeichen['F'] = 'Frankfurt';
$kennzeichen['HB'] = 'Bremen';

unset($kennzeichen['HB']);
$kennzeichen['F'] = 'Frankfurt am Main';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../php_kurs_woche3/style/style.css">
    <title>Übung aus Kapitel 5</title>
</head>
<body>
    <header>
        <h1>Autokennzeichen und dazugehörige Städte</h1>
    </header>
    <main class="container">
    <table>
      <thead>
        <tr>
          <th>Kennzeichen</th>
          <th>Stadt</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($kennzeichen as $k => $stadt): ?>
          <tr>
            <td><?= $k ?></td>
            <td><?= $stadt ?></td>
          </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
  </main>
</body>
</html>