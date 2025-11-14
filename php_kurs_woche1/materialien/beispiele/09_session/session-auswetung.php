<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daten der Session speichern</title>
</head>
<body>
    <header>
        <h1>Daten der Session speichern</h1>
    </header>
    <main>
        <p>Sie haben folgendes eingetragen:
            <br>Vorname: <?= $_POST['vorname']?>
            <br>Nachname: <?= $_POST['nachname']?>
            <br>Whonort: <?= $_POST['ort']?>
        </p>
        <?php
            
            $_SESSION['vorname'] = $_POST['vorname'];
            $_SESSION['nachname'] = $_POST['nachname'];
            $_SESSION['ort'] = $_POST['ort'];
            $_SESSION['zeit'] = time();

            
        ?>
        <p>Weiter zu <a href="session-formular.php">folgende seite</a></p>
    </main>
</body>
</html>