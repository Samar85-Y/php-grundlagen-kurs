<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datums-Funktionen</title>
    <link rel="stylesheet" href="../../../php_kurs_woche3/style/style.css">

</head>
<body>
    <header>
        <h1>Datumsfunktionen</h1>
        
    </header>
    <main class="container">
        <h2><code>getdate()</code></h2>
        <?php
            echo '<pre>', print_r(getdate(), true) , '</pre>';
        ?>
        <h2><code>date()</code></h2>
        <p><?= date('d.m.Y H:i:s'); ?></p>

        <h2><code>time()</code></h2>
        <p><?= time(); ?></p>
        <?php $morgen =time() +24 * 60 * 60; ?>
        <p>Morgen ist der <?= date('d.m.Y', $morgen); ?></p>
        <?php $vt = time() +13 * 24 *60*60 ?>
        <p>In 14 Tagen ist der <?= date('d.m.Y', $vt); ?></p>

    </main>
</body>
</html>