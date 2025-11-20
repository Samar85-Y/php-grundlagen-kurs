<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', 'true');

require_once __DIR__ . '/../inc/tool.php';

$notes = loadNotes();
$message = '';

// Erfolgs- oder Fehlermeldungen anzeigen
if (isset($_GET['success'])) {
    if ($_GET['success'] === 'added') {
        $message = '<div class="alert success">Notiz erfolgreich hinzugefügt!</div>';
    } elseif ($_GET['success'] === 'deleted') {
        $message = '<div class="alert success">Notiz erfolgreich gelöscht!</div>';
    }
}

if (isset($_GET['error'])) {
    $message = '<div class="alert error">Fehler: ' . htmlspecialchars($_GET['error']) . '</div>';
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Übung 5 | Notiz-Manager Light</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <header>
        <h1>Übung 5 | Notiz-Manager Light</h1>
    </header>
    
    <main class="container">
        <?= $message ?>
        
        <section class="add-note-form">
            <h2>Neue Notiz hinzufügen</h2>
            <form action="../add.php" method="POST">
                <div class="form-group">
                    <label for="title">Titel:</label>
                    <input type="text" id="title" name="title" required>
                </div>
                
                <div class="form-group">
                    <label for="content">Inhalt:</label>
                    <textarea id="content" name="content" rows="5" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Notiz hinzufügen</button>
            </form>
        </section>
        
        <section class="notes-list">
            <h2>Alle Notizen (<?= count($notes) ?>)</h2>
            
            <?php if (empty($notes)): ?>
                <p class="no-notes">Noch keine Notizen vorhanden. Erstellen Sie Ihre erste Notiz!</p>
            <?php else: ?>
                <div class="notes-grid">
                    <?php foreach ($notes as $note): ?>
                        <div class="note-card">
                            <h3><?= htmlspecialchars($note->getTitle()) ?></h3>
                            <p class="note-content"><?= nl2br(htmlspecialchars($note->getContent())) ?></p>
                            <div class="note-footer">
                                <span class="note-date"><?= htmlspecialchars($note->getCreatedAt()) ?></span>
                                <form action="../delete.php" method="POST" style="display: inline;">
                                    <input type="hidden" name="id" value="<?= $note->getId() ?>">
                                    <button type="submit" class="btn btn-delete" onclick="return confirm('Notiz wirklich löschen?')">Löschen</button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>
