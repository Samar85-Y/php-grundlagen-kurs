<?php
    
    declare(strict_types=1);
    //!die folgenden 2 Zeilen in der Produktiv-Variante Löschen !
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', true);
    
    require __DIR__ . '/../inc/db-connect.php';
    require __DIR__ . '/../inc/funnctions.php';
    
$title =trim($_POST['title'] ?? '');
$content =trim($_POST['content'] ?? '');
$cat = $_POST['category_id'] ?? '';
$catId =($cat === '' ? null : (int)$cat);

if($title !== '' && $content !==''){
   addNote($pdo, $title, $content, $catId);
} 

header('Location: index.php');