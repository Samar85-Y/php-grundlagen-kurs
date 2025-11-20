<?php
    
    declare(strict_types=1);
    //!die folgenden 2 Zeilen in der Produktiv-Variante Löschen !
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', true);
    
    require __DIR__ . '/../inc/db-connect.php';
    require __DIR__ . '/../inc/funnctions.php';

    $id = (int)($_POST['id'] ?? 0);

    if($id){ deleteNote($pdo, $id); }
    header('Location: index.php');