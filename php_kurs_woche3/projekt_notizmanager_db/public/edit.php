<?php
    
    declare(strict_types=1);
    //!die folgenden 2 Zeilen in der Produktiv-Variante Löschen !
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', true);
    
    require __DIR__ . '/../inc/db-connect.php';
    require __DIR__ . '/../inc/funnctions.php';

    $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
    $note = $id ? findNote($pdo, $id) : null;

    if(!$note){ header('Location: index.php'); exit; }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eintrage Bearbeiten</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <h1>Eintrag Bearbeiten</h1>
            </div>
        </header>

        <main class="container">
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?= (int)$note->id ?>">
            <label>Title<input type="text" name="title" value="<?= safe($note->title) ?>"></label>
            <label>Inhalt<textarea name="content" rows= "10" require><?= nl2br(safe($note->content)) ?></textarea></label>
            <label>Kategorie
                <select name="category_id">
                    
                        <?php foreach ($pdo->query('SELECT id, name FROM categories ORDER BY name')as $cat):?>
                            <option value="<?= (int) $cat->id ?>" <?= ($note->category_id ?? null) === $cat->id ? 'selected' : '' ?>><?=safe($cat->name) ?></option>
                        <?php endforeach; ?>
                </select>
            </label>
                    <button type="submit">Speicheren</button>
                    <a href="index.php" class="button">Abbrechen</a>
        </form>
        </main>
    </body>
    </html>