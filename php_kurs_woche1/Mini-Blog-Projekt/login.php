<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

require 'includes/db.inc.php';
require 'includes/function.inc.php';
include 'includes/header.inc.php';
include 'includes/nav.inc.php';

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = safe($_POST['email']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM tbl_users WHERE users_email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user && password_verify($password, $user['users_password'])) {
        $_SESSION['user'] = [
            'id' => $user['users_id'],
            'forename' => $user['users_forename'],
            'lastname' => $user['users_lastname'],
            'email' => $user['users_email']
        ];
        echo "<p>Login erfolgreich! <a href='index.php'>Zur Startseite</a></p>";
    } else {
        $errors[] = "E-Mail oder Passwort falsch.";
    }
}
?>

<h1>Login</h1>

<?php foreach($errors as $error): ?>
<p style="color:red;"><?= $error ?></p>
<?php endforeach; ?>

<form method="post">
    E-Mail: <input type="email" name="email" required><br>
    Passwort: <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>

<?php include 'includes/footer.inc.php'; ?>

