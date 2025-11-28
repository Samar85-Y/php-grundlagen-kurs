<nav>
    <div class="container">
        <a href="index.php">Startseite</a>
    <?php if(isset($_SESSION['user'])): ?>
        <a href="post_create.php">Artikel erstellen</a>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <a href="login.php">Login</a>
        <a href="register.php">Registrieren</a>
    <?php endif; ?>

    </div>
</nav>