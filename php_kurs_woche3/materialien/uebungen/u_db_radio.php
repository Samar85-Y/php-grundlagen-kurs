<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once 'zeit.inc.php';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=hardware;charset=utf8mb4', 'php_user', 'samar49@rho', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
    echo '<p>Verbindung erfolgreich</p>';
} catch (PDOException $e) {
    die('DB-Fehler: ' . htmlspecialchars($e->getMessage()));
}

$pdo = new PDO('mysql:host=localhost;dbname=hardware;charset=utf8mb4', 'php_user', 'samar49@rho', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);

// SQL-Abfrage:  Größer als 60 GByte und weniger als 150 € Preis
$sql = "SELECT * FROM fp WHERE gp > 60 AND preis < 150 ORDER BY gp DESC";
$stmt = $pdo->query($sql);
$rows = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Auswertung mit Verzweigung</title>
<link rel="stylesheet" href="../../../php_kurs_woche3/style/style.css">
</head>
<body>
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
       
           <td><?= htmlspecialchars((string)$row["hersteller"]); ?></td>
           <td><?= htmlspecialchars((string)$row["typ"]); ?></td>
           <td><?= htmlspecialchars((string)$row["preis"]); ?></td>
    
        </tr>       
    <?php endforeach; ?>
    
</tbody>
</table>
</body>
</html>
