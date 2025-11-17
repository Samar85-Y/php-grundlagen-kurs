<?php 
declare(strict_types=1);
    error_reporting(E_ALL);
    ini_set('display_errors','1');
    
    $inventory=[
        ['name' => 'Rucksack', 'preis' => 79.90, 'bestand' => 12],
        ['name' => 'Kletterseil', 'preis' => 179.90, 'bestand' => 5],
        ['name' => 'Karabiner', 'preis' => 89.90, 'bestand' => 40],
    ];
    $total = 0.0;
    foreach($inventory as $i){
        $total +=$i['preis']*$i['bestand'];
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Mehrdimentsional Arrays</title>
</head>
<header>
    <h1>Mehrdimentsional Arrays</h1>
</header>
<main class= "container">
    <div class="card">
        <h2>Lager</h2>
        <ul>
            <?php
                
                foreach($inventory as $i):   
            ?>
            <li><?= htmlspecialchars($i['name']) ?> -
        <?= number_format($i['preis'], 2, ',', '.') ?> EURO  x <?= (int)$i['bestand'] ?></li>
<?php endforeach; ?>
        </ul>
        <p><strong>Gesamtwer: </strong><?= number_format($total, 2, ',','.') ?></p>
    </div>
</main>
<body>
    
</body>
</html>