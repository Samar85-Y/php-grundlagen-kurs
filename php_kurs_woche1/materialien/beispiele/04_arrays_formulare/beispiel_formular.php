<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', true);
//echo '<pre>', print_r( $_POST, false ), '</pre>';

$name = $_POST['fullname'] ?? '';
$msg = $_POST['msg'] ?? '';
$error = '';

// Prüfen ob diese Dateiüber ein Formular versendet wurde
if($_SERVER['REQUEST_METHOD'] === 'POST'){
//Prüfe ob alle Felder ausgefüllt wurden
  if( empty(trim($name)) === '' || empty(trim($msg)) === ''){
    $error = 'Bitte alle Felder ausfüllen';
  }
}
?>
<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Formular Beispiel</title>
  <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
  <header><h1>Formular & Validierung</h1></header>
  <main class="container">
    <?php if($error): ?>
    <p class="alert"><?= htmlspecialchars($error) ?><?php endif ?></p>
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post" class="card">
    
    <label for="">Name:
      <input type="text" name="fullname" value="<?= htmlspecialchars($name)?>">
    </label>

    <label for="">
      Nachricht:
      <textarea name="msg" rows="4"><?= nl2br(htmlspecialchars($msg)) ?></textarea>
    </label>

    <button type="submit">Senden</button>
    </form>
    <?php
      if(isset($_POST) && !$error) :  
    ?>
    <hr>
    <h2>Ausgabe</h2>
    <p><b><?= htmlspecialchars($name) ?>:</b><?= nl2br(htmlspecialchars($msg)) ?></p>
    <?php endif ?>
  </main>
</body>
</html>
