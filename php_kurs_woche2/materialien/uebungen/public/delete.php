<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', 'true');

require_once __DIR__ . '/inc/tools.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: public/index.php');
    exit;
}

// ID validieren
if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
    header('Location: public/index.php?error=Ungültige ID');
    exit;
}

$idToDelete = (int)$_POST['id'];

// Notizen laden
$notes = loadNotes();

// Notiz mit der entsprechenden ID entfernen
$filteredNotes = [];
$found = false;
foreach ($notes as $note) {
    if ($note->getId() === $idToDelete) {
        $found = true;
        continue; // Diese Notiz nicht hinzufügen (= löschen)
    }
    $filteredNotes[] = $note;
}

if (!$found) {
    header('Location: public/index.php?error=Notiz nicht gefunden');
    exit;
}

// Speichern
if (saveNotes($filteredNotes)) {
    header('Location: public/index.php?success=deleted');
} else {
    header('Location: public/index.php?error=Fehler beim Löschen');
}
exit;
