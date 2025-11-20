<?php
    
    declare(strict_types=1);
    //!die folgenden 2 Zeilen in der Produktiv-Variante Löschen !
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', true);
    
    require __DIR__ . '/../inc/db-connect.php';
    require __DIR__ . '/../inc/funnctions.php';

    $id = (int)($_POST['id'] ?? 0);
    $title = trim(($_POST['title'] ?? ''));
    $content = trim(($_POST['content'] ?? ''));
    $categoryId = $_POST['category_id'] ?? '';
    $catId = $categoryId === '' ? null : (int)$categoryId;
    if($id && $title !== '' && $content !== ''){
        updateNote($pdo, $id, $title, $content, $catId);

    }
            header('Location: index.php');       