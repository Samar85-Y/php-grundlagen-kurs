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

// SQL-Abfrage: Produktionsdatum im ersten Halbjahr 2008
$sql = "SELECT * FROM fp WHERE prod >= '2008-01-01' AND prod < '2008-07-01' ORDER BY prod ASC";
$stmt = $pdo->query($sql);
$rows = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../../../php_kurs_woche3/style/style.css">
<title>Vergleich von Datumsangaben</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Hersteller</th>
            <th>Typ</th>
            <th>GB</th>
            <th>Preis</th>
            <th>Produktionsdatum</th>
            <th>Artikelnummer</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $row): ?>
        <tr>
            <td><?= htmlspecialchars($row->hersteller); ?></td>
            <td><?= htmlspecialchars($row->typ); ?></td>
            <td><?= (int)$row->gp; ?></td>
            <td><?= number_format((float)$row->preis, 2, ',', '.'); ?> €</td>
            <td><?= htmlspecialchars(db_datum_aus($row->prod)); ?></td>
            <td><?= htmlspecialchars($row->artnummer); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
