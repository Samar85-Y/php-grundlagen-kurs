<?php
    declare(strict_types=1);
    error_reporting(E_ALL);
    ini_set('display_errors','1');
    session_start();

$_SESSION['vorname'] = $_POST['vorname'] ?? '';
$_SESSION['nachname'] = $_POST['nachname'] ?? '';
$_SESSION['wohnort'] = $_POST['wohnort'] ?? '';
$_SESSION['mail'] = $_POST['mail'] ?? '';
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Honigbestellung – Zusammenfassung</title>
</head>
<body>

<p>Dies sind in der Session gesammelten Daten:</p>

<pre style="font-size: 1.1em;">
<?php
foreach ($_SESSION as $key => $value) {
    echo htmlspecialchars($key) . ": " . htmlspecialchars($value) . "\n";
}
?>
</pre>

<?php
session_unset();
session_destroy();
?>

<p>Damit ist die Session beendet<a href="u_formular.php">Klicken Sie hier,</a>
um eine neue Session zu beginnen.</p>

</body>
</html>