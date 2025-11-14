<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <header>
        <h1>Session Formular</h1>
    </header>
    <main class="container">
    <form action="session-auswetung.php" method= "post">
        <label for="vorname"><b>Vorname</b></label>
            <input type="text" id="vorname" name="vorname" value="Max"><br>

            <label for="nachname"><b>Nachname</b></label>
            <input type="text" id="nachname" name="nachname" value="Müller"><br>

            <label for="ort"><b>ORT:</b></label>
            <input type="text" id="ort" name="ort"><br> 
    </form>

    </main>
    
</body>
</html>