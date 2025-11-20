<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', 'true');

require_once __DIR__ . '/inc/tools.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: public/index.php');
    exit;
}

// Formulardaten validieren
if (empty($_POST['title']) || empty($_POST['content'])) {
    header('Location: public/index.php?error=Titel und Inhalt sind erforderlich');
    exit;
}

$title = trim($_POST['title']);
$content = trim($_POST['content']);

// Bestehende Notizen laden
$notes = loadNotes();

// Neue ID generieren (höchste ID + 1)
$newId = 1;
foreach ($notes as $note) {
    if ($note->getId() >= $newId) {
        $newId = $note->getId() + 1;
    }
}

// Neue Notiz erstellen
$newNote = new Note($newId, $title, $content);
$notes[] = $newNote;

// Speichern
if (saveNotes($notes)) {
    header('Location: public/index.php?success=added');
} else {
    header('Location: public/index.php?error=Fehler beim Speichern');
}
exit;
