<?php
    declare(strict_types=1);
    error_reporting(E_ALL);
    ini_set('display_errors','1');
    session_start();

$_SESSION['akazie'] = $_POST['akazie'] ?? 0;
$_SESSION['heide'] = $_POST['heide'] ?? 0;
$_SESSION['klee'] = $_POST['klee'] ?? 0;
$_SESSION['tanne'] = $_POST['tanne'] ?? 0;
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Honigbestellung – Übersicht</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>

<h1>Honigbestellung</h1>

<p>Sie haben folgende Mengen bestellt:</p>
<ul>
    <li>Akazienhonig: <?php echo $_SESSION['akazie']; ?> Gläser</li>
    <li>Heidehonig: <?php echo $_SESSION['heide']; ?> Gläser</li>
    <li>Kleehonig: <?php echo $_SESSION['klee']; ?> Gläser</li>
    <li>Tannenhonig: <?php echo $_SESSION['tanne']; ?> Gläser</li>
</ul>

<p><strong>Session-ID:</strong> <?php echo session_id(); ?></p>

<a href="u_abschluss.php">Weiter zur Eingabe persönlicher Daten</a><p>und dem Abschluss der Bestellung.</p> 

</body>
</html>