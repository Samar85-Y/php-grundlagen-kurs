<?php
declare(strict_types=1);

require __DIR__ . 'bootstap.php';

try {
    $dsn = sprintf(
        'mysql:host=%s;dbname=%s;charset=%s',
        $_ENV['DB_HOST'],
        $_ENV['DB_NAME'],
        $_ENV['DB_CHARSET'],

    );
    $pdo = new PDO(
        $dsn,
        $_ENV['DB_USER'],
        $_ENV['DB_PASS'],
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]

    );

} catch (PDOException $e) {
    echo 'DB-Fehler: ' . htmlspecialchars($e->getMessage());
}