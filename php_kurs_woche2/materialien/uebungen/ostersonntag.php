



<?php
/**
 * ostersonntag.php
 * Hauptdatei zur Anzeige der Ostersonntage für verschiedene Jahre
 * 
 * Diese Datei bindet die Include-Datei ein und zeigt eine Tabelle
 * mit den Ostersonntagen für die Jahre 2024-2034
 */

// Einbinden der Include-Datei mit der Ostersonntag-Funktion
include 'ostersonntag.inc.php';
      // Array mit den Jahren
    $jahre = [2024, 2025, 2026, 2027, 2028, 2029, 2030, 2031, 2032, 2033, 2034];
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ostersonntag Auswertung</title>
    <link rel="stylesheet" href="../style/style.css">
          
</head>
<body>
    <h1>Ostersonntag</h1>

      <table>
        <thead>
            <tr>
                <th>Jahr</th>
                <th>Datum</th>
            </tr>
        </thead>
        <tbody>
            <?php
      
            foreach ($jahre as $jahr) {
                $datum = ostersonntag($jahr);
                echo "<tr>\n";
                echo "    <td>{$jahr}</td>\n";
                echo "    <td>{$datum}</td>\n";
                echo "</tr>\n";
            }
            ?>
        </tbody>
    </table>
    
</body>
</html>

