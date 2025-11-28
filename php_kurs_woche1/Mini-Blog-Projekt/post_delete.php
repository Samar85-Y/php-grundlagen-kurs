<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
require 'includes/db.inc.php';
require 'includes/function.inc.php';

//erste schrit login
if(!isLoggedIn()) {
    die("<p>Du musst eingeloggt sein! <a href='login.php'>Login</a></p>");
}

// prüf of post_id existerit
if(!isset($_GET['post'])) {
    die("Kein Artikel angegeben.");
}

$postId = intval($_GET['post']);

// Fetch post
$stmt = $pdo->prepare("SELECT * FROM tbl_posts WHERE posts_id = ?");
$stmt->execute([$postId]);
$post = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$post) {
    die("Artikel wurde nicht gefunden.");
}

if($post['posts_users_id_ref'] != $_SESSION['user']['id']) {
    die("Du darfst diesen Artikel nicht löschen.");
}

// prüf ob image existert und delete
if(!empty($post['posts_image']) && file_exists($post['posts_image'])) {
    unlink($post['posts_image']);   // delete image file
}
//delete image von DB
$stmt = $pdo->prepare("DELETE FROM tbl_posts WHERE posts_id = ?");
$stmt->execute([$postId]);

echo "<p>Artikel wurde gelöscht! <a href='index.php'>Zurück zur Startseite</a></p>";
?>
