<?php
    
    declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', true);

/**
 * einfache Aufzählung
 */

enum Skat{
    case Eichel;
    case Gruen;
    case Herz;
    case Schellen;

    function getName(){
        return $this->name;
    }
}

/**
 * gesicherte Aufzählung (backed enumeration)
 * Typehinweis darf *ausschlißen* int oder string sein
 * ein vorhandere Wert kann nicht an ein weiteres Element
 * gehängt werden
 * Aufzählungen besitzen grundsätzlich eine schreibgeschützte
 * Eigenschaft value
 */

enum Status: string{
    case undone = 'offen';
    case send = 'gesendet';
    case done = 'abgeschlossen';

    //case success = 'abgeschlossen';
}


function getStatus(Status $stat){
    return "Name: $stat->name, Wert: $stat->value";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aufzahlung</title>
</head>
<body>
    <header>
        <h1>Aufzahlung</h1>
    </header>
    <main class="container">
        <h2>einface Aufzählungen</h2>
        <p><?= Skat::Herz->getName() ?> ist Trumpf</p>


        <h2>gesichert Aufzählung</h2>
        <p><?= getStatus(Status::send) ?></p>
    
    </main>
</body>
</html>