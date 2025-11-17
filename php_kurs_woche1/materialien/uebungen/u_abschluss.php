<?php
    declare(strict_types=1);
    error_reporting(E_ALL);
    ini_set('display_errors','1');
    session_start();
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Honigbestellung – Abschluss</title>
</head>
<body>
    <header>
        <h1>Honigbestellung – Abschluss</h1>
    </header>
    <p>Bitte geben Sie noch Ihre Kontaktdaten ein:</p>


<form action="u_ende.php" method="post">

    <label>Vorname:<br>
        <input type="text" name="vorname">
    </label><br><br>

    <label>Nachname:<br>
        <input type="text" name="nachname">
    </label><br><br>

    <label>Wohnort:<br>
        <input type="text" name="wohnort">
    </label><br><br>

    <label>Mailadresse:<br>
        <input type="email" name="mail">
    </label><br><br>

    <button type="submit">Abschicken</button>

</form>

</body>
</html>