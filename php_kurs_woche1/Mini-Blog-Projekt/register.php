<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

require 'includes/db.inc.php';
require 'includes/function.inc.php';
include 'includes/header.inc.php';
include 'includes/nav.inc.php';

$errors = [];
$success = false;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $forename = safe($_POST['forename']);
    $lastname = safe($_POST['lastname']);
    $email = safe($_POST['email']);
    $password = $_POST['password'];
    $password_repeat = $_POST['password_repeat'];

    
    if (empty($forename) || empty($lastname) || empty($email) || empty($password) || empty($password_repeat)) {
        $errors[] = "Alle Felder müssen ausgefüllt sein.";
    } elseif ($password !== $password_repeat) {
        $errors[] = "Die Passwörter stimmen nicht überein.";
    } else {
        
        $stmt = $pdo->prepare("SELECT users_id FROM tbl_users WHERE users_email = ?");
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            $errors[] = "Diese E-Mail-Adresse ist bereits registriert.";
        } else {
            
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO tbl_users (users_forename, users_lastname, users_email, users_password) VALUES (?, ?, ?, ?)");
            $stmt->execute([$forename, $lastname, $email, $hash]);

            $success = true;
        }
    }
}
?>

<main class="container">
    <h1>Registrierung</h1>

    <?php if ($errors): ?>
        <?php foreach ($errors as $error): ?>
            <p style="color:red;"><?= $error ?></p>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if ($success): ?>
        <p style="color:green;">Registrierung erfolgreich! <a href="login.php">Jetzt einloggen</a></p>
    <?php else: ?>
        <form action="<?= $_SERVER['SCRIPT_NAME']; ?>" method="post">
            <label>Vorname:
                <input type="text" name="forename" required value="<?= safe($forename ?? '') ?>">
            </label><br>

            <label>Nachname:
                <input type="text" name="lastname" required value="<?= safe($lastname ?? '') ?>">
            </label><br>

            <label>E-Mail:
                <input type="email" name="email" required value="<?= safe($email ?? '') ?>">
            </label><br>

            <label>Passwort:
                <input type="password" name="password" required>
            </label><br>

            <label>Passwort wiederholen:
                <input type="password" name="password_repeat" required>
            </label><br>

            <button type="submit">Registrieren</button>
        </form>
    <?php endif; ?>
</main>

<?php include 'includes/footer.inc.php'; ?>
