<?php
require_once __DIR__ . '../class/Note.php';

define('DATA_FILE', __DIR__ . '../data/notes.json');

/**
 * Lädt alle Notizen aus der JSON-Datei
 */
function loadNotes(): array {
    if (!file_exists(DATA_FILE)) {
        return [];
    }
    
    $json = file_get_contents(DATA_FILE);
    $data = json_decode($json, true);
    
    if (!is_array($data)) {
        return [];
    }
    
    $notes = [];
    foreach ($data as $noteData) {
        $notes[] = new Note(
            $noteData['id'],
            $noteData['title'],
            $noteData['content'],
            $noteData['created_at']
        );
    }
    
    return $notes;
}

/**
 * Speichert alle Notizen in die JSON-Datei
 */
function saveNotes(array $notes): bool {
    $data = [];
    foreach ($notes as $note) {
        $data[] = $note->toArray();
    }
    
    $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    return file_put_contents(DATA_FILE, $json) !== false;
}

/**
 * Lädt eine einzelne Notiz anhand der ID
 */
function loadNoteById(int $id): ?Note {
    $notes = loadNotes();
    foreach ($notes as $note) {
        if ($note->getId() === $id) {
            return $note;
        }
    }
    return null;
}
