<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasse</title>
    <link rel="stylesheet" href="../matreialien/style/style.css">
</head>
<body>
    <header>
        <h1>Bestellung abschließen</h1>
    </header>
    <main>

    <?php
        
        if(isset($_POST['abschlissen'])) :
            $vorname = $_POST['vorname'];
            $nachname = $_POST['nachname'];
            $whoneort = $_POST['whoneort'];
        
    ?>

            <p>Sie haben folgende Bestellung übermittelt: </p>
            <p><?= $vorname ?> <?= $nachname ?> aus <?= $whoneort ?></p>

            <table>
                <tr>
                    <th>Art. -Nr</th>
                    <th>Artikel</th>
                    <th>Menge</th>
                    <?php
                        
                        $bestellung = "Art-Nr.; Artikel; Menge\r\n";
                        foreach($_SESSION as $artnr => $menge) :
                            if(str_starts_with($artnr, 's')) : 
                        
                    ?>
                    <tr>
                        <td><?= $artnr ?></td>
                        <td><?= $array_schoko[$artnr] ?></td>
                        <td><?= $menge ?></td>
                    </tr>
                    <?php $bestellung .= "$artnr;" . $array_proalinen[$artnr] .= "$menge;"   
                        
                    ?>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </tr>
            </table>
        <p>Bitte füllen Sie die nachfolgenden Eingabefeld aus</p>
        <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method= "POST">

        <p>Vorname: <input type="text" name="vorname"></p>
        <p>Nachname: <input type="text" name="nachname"></p>
        <p>Wohnort: <input type="text" name="whoneort"></p>
        <button></button>
    
    </form>
    <?php endif;  ?>
    <ul>
        <li><a href ="form-schoko.php">Schokolade bestellen</a></li>
        <li><a href ="form-pralinen.php">Parlinen bestellen</a></li>
        <li><a href ="wahrenkorb.php">Warenkrob</a></li>
    </ul>
    </main>
</body>
</html>