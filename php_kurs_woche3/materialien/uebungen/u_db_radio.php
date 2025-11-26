<?php 
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors','1');
require_once 'zeit.inc.php';

try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=hardware;charset=utf8mb4',
        'php_user',
        'samar49@rho',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        ]
    );
    echo '<p>Verbindung erfolgreich</p>';
} catch (PDOException $e) {
    die('DB-Fehler: ' . htmlspecialchars($e->getMessage()));
}
?> 

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festplatten - Ergebnis</title>
    <link rel="stylesheet" href="../../../php_kurs_woche3/style/style.css">
</head>
<body>
    <div class="container">
        
        <?php
        // POST-Daten empfangen
$preisgruppe = $_POST['preisgruppe'] ?? 1;
$sortierung = !empty($_POST['sortiert']);   // <-- FIXED

// SQL-Abfrage je nach Preisgruppe erstellen
switch ($preisgruppe) {
    case 1:
        $where = "preis <= 120";
        $gruppe_text = "bis 120 € einschl.";
        break;
    case 2:
        $where = "preis > 120 AND preis <= 140";
        $gruppe_text = "ab 120 € ausschl. bis 140 € einschl.";
        break;
    case 3:
        $where = "preis > 140";
        $gruppe_text = "ab 140 € ausschl.";
        break;
    default:
        $where = "1=1";
        $gruppe_text = "Alle";
}

$order = $sortierung ? "ORDER BY preis DESC" : "";

$sql = "SELECT * FROM fp WHERE $where $order";

$stmt = $pdo->query($sql);   // Only ONE query now
$rows = $stmt->fetchAll();

?>
       <table>
    <thead>
        <tr>
            <th>Hersteller</th>
            <th>Typ</th>
            <th>Preis</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $row): ?>
        <tr>
            <td><?= htmlspecialchars($row->hersteller); ?></td>
            <td><?= htmlspecialchars($row->typ); ?></td>
            <td><?= number_format((float)$row->preis, 2, ',', '.'); ?> €</td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
        
        <a href="u_db_radio.html">← Zurück zur Auswahl</a>
    </div>
</body>
</html>
