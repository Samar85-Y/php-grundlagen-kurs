<?php
    
    declare(strict_types=1);
    
    //!die folgenden 2 Zeilen in der Produktiv-Variante Löschen !
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', true);
    
    require __DIR__ . '/../inc/db-connect.php';
    require __DIR__ . '/../inc/funnctions.php';

    $sortedNotes = sortNotesByCategory($pdo, (int)($_GET['category_id'] ?? 0));

    header('Location: index.php');