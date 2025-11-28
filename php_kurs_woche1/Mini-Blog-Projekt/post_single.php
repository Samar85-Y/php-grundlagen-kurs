<?php
session_start();
require 'includes/db.inc.php';
require 'includes/function.inc.php';
include 'includes/header.inc.php';
include 'includes/nav.inc.php';

if(!isset($_GET['post'])) die("Kein Artikel ausgewählt.");

$postId = intval($_GET['post']);
$stmt = $pdo->prepare("SELECT p.*, u.users_forename, u.users_lastname, c.categ_name 
                       FROM tbl_posts p
                       JOIN tbl_users u ON p.posts_users_id_ref = u.users_id
                       JOIN tbl_categories c ON p.posts_categ_id_ref = c.categ_id
                       WHERE posts_id = ?");
$stmt->execute([$postId]);
$post = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$post) die("Artikel nicht gefunden.");
?>

<h1><?= $post['posts_header'] ?></h1>
<p>Autor: <?= $post['users_forename'] ?> <?= $post['users_lastname'] ?></p>
<p>Kategorie: <?= $post['categ_name'] ?></p>
<p>Erstellt: <?= $post['posts_created_at'] ?> | Aktualisiert: <?= $post['posts_updated_at'] ?></p>

<?php if($post['posts_image']): ?>
<img src="<?= $post['posts_image'] ?>" alt="Bild zum Artikel" style="max-width:300px;"><br>
<?php endif; ?>

<p><?= nl2br($post['posts_content']) ?></p>

<?php include 'includes/footer.inc.php'; ?>

