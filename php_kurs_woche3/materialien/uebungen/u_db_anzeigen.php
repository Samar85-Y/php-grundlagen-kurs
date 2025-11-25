<?php 
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors','1');

require_once 'zeit.inc.php';

// $conn = new mysqli("localhost", "php_user", "samar49@rho", "hardware");

// if ($conn->connect_error) {
//     die("Verbindung fehlgeschlagen: " . $conn->connect_error);
// }
// $sql = "SELECT * FROM fp 
//         WHERE gb >= 60 AND preis < 150 
//         ORDER BY gb DESC";

// $result = $conn->query($sql);


try {
    $pdo = new PDO('mysql:host=localhost;dbname=hardware;charset=utf8mb4','php_user', 'samar49@rho',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]);
    echo 'Verbindung erfolgerich';
} catch (PDOException $e) {
    echo 'DB-Fehler' . htmlspecialchars($e->getMessage());
}



function getAll(PDO $pdo): array {
    $sql = 'SELECT * FROM fp';
    $stmt = $pdo ->query($sql);
    return $stmt->fetchAll();
}

$result = getAll($pdo);

//var_dump($result);




// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//         echo $row["hersteller"] . ", " . 
//              $row["typ"] . ", " . 
//              $row["gb"] . ", " . 
//              $row["preis"] . ", " . 
//              db_datum_aus($row["prod"]) . ", " . 
//              $row["artnummer"] . "<br>";
//     }

// } else {
//     echo "Keine Datensätze gefunden";
// }

// $conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../php_kurs_woche3/style/style.css">
    <title>Datensätze anzeigen</title>
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
            <?php foreach ($result as $row): ?>
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

