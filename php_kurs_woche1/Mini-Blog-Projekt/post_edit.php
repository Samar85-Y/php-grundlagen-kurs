<?php
session_start();

require 'includes/db.inc.php';
require 'includes/function.inc.php';
include 'includes/header.inc.php';
include 'includes/nav.inc.php';

if(!isLoggedIn()) {
    die("<p>Du musst eingeloggt sein! <a href='login.php'>Login</a></p>");
}

if(!isset($_GET['post'])) die("Kein Artikel ausgewählt.");
$postId = intval($_GET['post']);

// Artikel aus DB holen
$stmt = $pdo->prepare("SELECT * FROM tbl_posts WHERE posts_id = ?");
$stmt->execute([$postId]);
$post = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$post) die("Artikel nicht gefunden.");
if($post['posts_users_id_ref'] != $_SESSION['user']['id']) die("Du darfst diesen Artikel nicht bearbeiten.");

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $header = safe($_POST['header']);
    $content = safe($_POST['content']);
    $category = intval($_POST['category']);
    $imagePath = $post['posts_image'];

    // Neues Bild hochladen
    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'images/';
        $filename = basename($_FILES['image']['name']);
        $target = $uploadDir . time() . '_' . $filename;
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            // altes Bild löschen
            if($imagePath && file_exists($imagePath)) unlink($imagePath);
            $imagePath = $target;
        } else {
            $errors[] = "Bild konnte nicht hochgeladen werden.";
        }
    }

    // Bild löschen, falls Checkbox gesetzt
    if(isset($_POST['delete_image']) && $imagePath) {
        if(file_exists($imagePath)) unlink($imagePath);
        $imagePath = null;
    }

    if(empty($errors)) {
        $stmt = $pdo->prepare("UPDATE tbl_posts SET posts_header=?, posts_content=?, posts_categ_id_ref=?, posts_image=? WHERE posts_id=?");
        $stmt->execute([$header, $content, $category, $imagePath, $postId]);
        echo "<p>Artikel aktualisiert! <a href='post_single.php?post=$postId'>Zum Artikel</a></p>";
        $post['posts_header'] = $header;
        $post['posts_content'] = $content;
        $post['posts_categ_id_ref'] = $category;
        $post['posts_image'] = $imagePath;
    }
}

// Kategorien auslesen
$stmt = $pdo->query("SELECT * FROM tbl_categories");
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Artikel bearbeiten</h1>

<?php foreach($errors as $error): ?>
<p style="color:red;"><?= $error ?></p>
<?php endforeach; ?>

<form method="post" enctype="multipart/form-data">
    Titel: <input type="text" name="header" value="<?= $post['posts_header'] ?>" required><br>
    Inhalt: <textarea name="content" required><?= $post['posts_content'] ?></textarea><br>
    Kategorie: 
    <select name="category">
        <?php foreach($categories as $cat): ?>
            <option value="<?= $cat['categ_id'] ?>" <?= $cat['categ_id']==$post['posts_categ_id_ref']?'selected':'' ?>><?= $cat['categ_name'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <?php if($post['posts_image']): ?>
        Aktuelles Bild: <img src="<?= $post['posts_image'] ?>" alt="" style="max-width:100px;"><br>
        <input type="checkbox" name="delete_image"> Bild löschen<br>
    <?php endif; ?>
    Neues Bild: <input type="file" name="image"><br>
    <button type="submit">Artikel aktualisieren</button>
</form>

<?php include 'includes/footer.inc.php'; ?>
