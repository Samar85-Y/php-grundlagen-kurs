<?php
declare(strict_types=1);
// ! die folgenden 2 Zeilen in der Produktiv-Variante löschen!
error_reporting(E_ALL);
ini_set('display_errors',true);

session_start();

$_SESSION = array();

//echo "<p>Logout erfolgreich! <a href='index.php'>Zur Startseite</a></p>";



session_destroy();

header('Location: index.php');