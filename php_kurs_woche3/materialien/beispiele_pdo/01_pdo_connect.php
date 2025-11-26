<?php
declare(strict_types=1);

//echo '<pre>', var_dump( PDO::getAvailableDrivers() ), '</pre>';

try {
    $pdo = new PDO('mysql:localhost; dbname=notizmanager;charset=utf8mb4','php_user', 'samar49@rho',[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]);
    echo 'Verbindung erfolgerich';
} catch (PDOException $e) {
    echo 'DB-Fehler' . htmlspecialchars($e->getMessage());
}

