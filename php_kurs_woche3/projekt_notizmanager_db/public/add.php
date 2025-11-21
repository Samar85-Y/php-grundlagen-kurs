<?php
include_once 'header.php';

require_login();

$title = trim($_POST['title'] ?? '');
$content = trim($_POST['content'] ?? '');
$cat = $_POST['category_id'] ?? '';
$catId = ($cat === '' ? null : (int)$cat);
$visibility = in_array($_POST['visibility'] ?? '', ['private','public','shared'], true) ? $_POST['visibility'] : 'private';

$ownerId = current_user_id();

if ($title !== '' && $content !== '' && $ownerId !== null) {
  addNote($pdo, $title, $content, $catId, $ownerId, $visibility);
}

header('Location: index.php');
exit();
