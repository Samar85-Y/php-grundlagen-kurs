<?php
    declare(strict_types=1);
    error_reporting(E_ALL);
    ini_set('display_errors','1');
session_start();
require_once 'u_artikel.inc.php';
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Honigbestellung – Formular</title>
</head>
<body>

<h1>Übung: Honigbestellung</h1>
<p>Bitte geben Sie die Bestellmenge an (Einheit: 500 g-Glas).</p>

<form action="u_bestellung.php" method="post">
    <table border="1" cellpadding="5">
        <tr><th>Honigsorte</th><th>Menge</th></tr>

        <tr><td>Akazienhonig</td><td><input type="number" name="akazie"></td></tr>
        <tr><td>Heidehonig</td><td><input type="number" name="heide"></td></tr>
        <tr><td>Kleehonig</td><td><input type="number" name="klee"></td></tr>
        <tr><td>Tannenhonig</td><td><input type="number" name="tanne"></td></tr>
    </table>

    <br>
    <button type="submit">Weiter</button>
</form>

</body>
</html>