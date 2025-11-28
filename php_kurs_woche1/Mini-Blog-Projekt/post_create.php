<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

require 'includes/db.inc.php';
require 'includes/function.inc.php';
include 'includes/header.inc.php';
include 'includes/nav.inc.php';

// Only logged-in users
if(!isLoggedIn()) {
    die("<p>Du musst eingeloggt sein! <a href='login.php'>Login</a></p>");
}

$errors = [];
$imagePath = null;

// Fetch categories
$stmt = $pdo->query("SELECT * FROM tbl_categories ORDER BY categ_name ASC");
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $header = safe($_POST['header'] ?? '');
    $content = safe($_POST['content'] ?? '');
    $category = isset($_POST['category']) ? intval($_POST['category']) : null;

    // Validation
    if(empty($header) || empty($content) || !$category) {
        $errors[] = "Bitte alle Felder ausfüllen und eine Kategorie auswählen.";
    }

    // Handle image upload
    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'images/';
        if(!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);

        $filename = preg_replace("/[^A-Za-z0-9_\-\.]/", '_', basename($_FILES['image']['name']));
        $target = $uploadDir . time() . '_' . $filename;

        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $imagePath = $target;
        } else {
            $errors[] = "Bild konnte nicht hochgeladen werden. Prüfe die Schreibrechte des Ordners 'images'.";
        }
    }

    // Insert post if no errors
    if(empty($errors)) {
        $stmt = $pdo->prepare("
            INSERT INTO tbl_posts (posts_users_id_ref, posts_categ_id_ref, posts_header, posts_content, posts_image)
            VALUES (?, ?, ?, ?, ?)
        ");
        $stmt->execute([$_SESSION['user']['id'], $category, $header, $content, $imagePath]);
        echo "<p>Artikel erstellt! <a href='index.php'>Zur Startseite</a></p>";
        // Clear form values after success
        $header = $content = '';
        $category = null;
        $imagePath = null;
    }
}
?>

<main class="container">
    <h1>Artikel erstellen</h1>

    <?php if(!empty($errors)): ?>
        <ul style="color:red;">
            <?php foreach($errors as $error): ?>
                <li><?= safe($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data">
        <label>Titel:<br>
            <input type="text" name="header" required value="<?= safe($header ?? '') ?>">
        </label><br><br>

        <label>Inhalt:<br>
            <textarea name="content" required><?= safe($content ?? '') ?></textarea>
        </label><br><br>

        <label>Kategorie:<br>
            <select name="category" required>
                <option value="">--Bitte wählen--</option>
                <?php foreach($categories as $cat): ?>
                    <option value="<?= $cat['categ_id'] ?>" 
                        <?= (isset($category) && $category == $cat['categ_id']) ? 'selected' : '' ?>>
                        <?= safe($cat['categ_name']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </label><br><br>

        <label>Bild:<br>
            <input type="file" name="image">
        </label><br><br>

        <button type="submit">Artikel speichern</button>
    </form>
</main>

<?php include 'includes/footer.inc.php'; ?>
