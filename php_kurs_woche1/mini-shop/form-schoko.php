<?php
    
    declare(strict_types=1);
    error_reporting(E_ALL);
    ini_set('display_errors', true);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schokolade - Bestellformular</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
   <header>
    <h1>Bestellformular für Schokolade</h1>
   </header> 
   <main>
    <p>Tragen Sie bitte die gewünschte Menge Schokolade ein</p>
    <form action="artikel.inc.php" method="Post">
    <table>
        <tr>
            <th>Art.-Nr</th>
            <th>Artikel</th>
            <th>Menge</th>
            <th>Einheit</th>
        </tr>

        <?php
            foreach($array_schoko as $artnr => $arttikel):
        ?>
        <tr>
            <td><?= $artnr ?></td>
            <td><?= $arttikel ?></td>
            <td><input type="number" name="<?= $artnr?>" value="<?= $_SESSION[$artnr] ?? 0 ?>" size = "5"></td>
                <td>Tafel (100g)</td>
        </tr>
        <?php endforeach ?>
        <td colspan ="4">
            <button style="margin-bottom:1rem;" type= "submit">In den Warenkrob</button>
            <button type = "reset">Abbrechen</button>
        </td>
    </table>
    </form>
</main>
</body>
</html>