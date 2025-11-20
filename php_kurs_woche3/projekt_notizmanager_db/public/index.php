<?php
    
    declare(strict_types=1);
    //!die folgenden 2 Zeilen in der Produktiv-Variante Löschen !
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', true);

    session_start();
    require __DIR__ . '/../inc/db-connect.php';
    require __DIR__ . '/../inc/funnctions.php';
    $notes = getAllNotes($pdo);
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notiz-Manager</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <header>
            <h1>Notiz-Manager</h1>
            <div class="text-muted">
                Manage User Login
            </div>
        </header>
        <main class="container">
            <section class="card">
                <h2>Neue Notiz</h2>
                <form action="add.php" method="post">
                    <label>Title<input type="text" name="title" require></label>
                    <label>Inhalt<textarea name="content" rows= "10"require></textarea></label>
                    <label>Kategorie
                        <select name="category_id">
                            <option value=""disabled selected>- keine -</option>
                            <?php foreach ($pdo->query('SELECT id, name FROM categories ORDER BY name')as $cat):?>
                                <option value="<?= (int) $cat->id ?>"><?=safe($cat->name) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                    <button type="submit">Speicheren</button>
                </form>
            </section>

            <section class="card">
                <h2>Einträge</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Kategorie</th>
                            <th>Dattum</th>
                            <th>Aktionen</th>
                        </tr>
                    </thead>
                    <?php foreach ($notes as $n): ?>
                        <tr>
                            <td><?= safe($n->title) ?></td>
                            <td><?= $n->category  ?></td>
                            <td><?= safe($n->created_at) ?></td>
                            <td>
                                <a href="edit.php?id=<?= (int)$n->id ?>"calss= "button">Bearbeiten</a>
                                <form action="delete.php" style= "display:inline;"method="post">
                                    <input type="hidden" name="id" value="<?= (int)$n->id ?>">
                                    <button type="submit" class="button">Löschen</button>
                                </form>
                            </td>
                        
                        </tr>
                <?php endforeach; ?>
                     
                    <tbody>

                    </tbody>
                </table>
            </section>
        </main>
    </body>
    </html>