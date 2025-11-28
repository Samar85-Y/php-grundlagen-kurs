<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

require 'includes/db.inc.php';
require 'includes/function.inc.php';
include 'includes/header.inc.php';
include 'includes/nav.inc.php';

// Ausgewählte Kategorie aus GET prüfen
$selectedCategory = null;
if (isset($_GET['category']) && $_GET['category'] !== '') {
    if (ctype_digit((string)$_GET['category'])) {
        $selectedCategory = (int) $_GET['category'];
    }
}

// Kategorien für das Dropdown laden
$catStmt = $pdo->query("SELECT categ_id, categ_name FROM tbl_categories ORDER BY categ_name");
$categories = $catStmt->fetchAll(PDO::FETCH_ASSOC);

// Posts laden (mit optionaler Kategorie-Filterung)
if ($selectedCategory) {
    $stmt = $pdo->prepare(
        "SELECT posts_id, posts_header, posts_users_id_ref, categ_name
         FROM tbl_posts
         JOIN tbl_categories ON posts_categ_id_ref = categ_id
         WHERE posts_categ_id_ref = :categ_id
         ORDER BY posts_created_at DESC"
    );
    $stmt->execute(['categ_id' => $selectedCategory]);
} else {
    $stmt = $pdo->query(
        "SELECT posts_id, posts_header, posts_users_id_ref, categ_name
         FROM tbl_posts
         JOIN tbl_categories ON posts_categ_id_ref = categ_id
         ORDER BY posts_created_at DESC"
    );
}

$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<main class="container">
    <section class="card">
        <h1>Mini-Blog</h1>

        <!-- Filter-Formular -->
        <form method="get" action="index.php" style="margin-bottom:1rem;">
            <label for="category">Kategorie:</label>
            <select name="category" id="category">
                <option value=""<?= $selectedCategory === null ? ' selected' : '' ?>>Alle</option>
                <?php foreach ($categories as $cat): ?>
                    <option value="<?= $cat['categ_id'] ?>"<?= ($selectedCategory !== null && $selectedCategory == $cat['categ_id']) ? ' selected' : '' ?>><?= htmlspecialchars($cat['categ_name'], ENT_QUOTES) ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit">Filtern</button>
        </form>

        <ul>
            <?php foreach($posts as $post): ?>
                <li>
                    <a href="post_single.php?post=<?= $post['posts_id'] ?>"><?= htmlspecialchars($post['posts_header'], ENT_QUOTES) ?></a>
                        (<?= htmlspecialchars($post['categ_name'], ENT_QUOTES) ?>)
                            <?php if(isLoggedIn() && isset($_SESSION['user']['id']) && $_SESSION['user']['id'] == $post['posts_users_id_ref']): ?>
                                     | <a href="post_edit.php?post=<?= $post['posts_id'] ?>">Bearbeiten</a>
                                     | <a href="post_delete.php?post=<?= $post['posts_id'] ?>">Löschen</a>
                             <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>

<?php include 'includes/footer.inc.php'; ?>