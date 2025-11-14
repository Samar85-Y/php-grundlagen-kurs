<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Benuzer anlegen</title>
</head>
<body>
    <header>
        <h1>Benutzer Registrierung</h1>
    </header>
    <main>
        <?php
            
            //Datencheck
            echo '<pre>', print_r($_POST, true), '</pre>';
            //Inhalt des Superglobalen Arrays in einzielen variablen speichern
            $vorname = $_POST['vorname'];
            $nachname = $_POST['nachname'];
            $email = $_POST['email'];
            $nachricht =$_POST['nachricht'];
            echo nl2br("<p>Folgenden Daten wurden geschpeichert<b> $name <br> 
            $nachname<br>$email <br> $nachricht.</p>");

            $fields = array($vorname, $nachname, $email,$nachricht );

            $fh = fopen('benutzer.csv', 'a');

            fputcsv($fh, $fields, ',');

            fclose($fh);
        ?>
    </main>
</body>
</html>