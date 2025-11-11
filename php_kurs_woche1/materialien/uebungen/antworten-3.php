<?php
declare(strict_types=1);
$a =7;
$b = "30 Euro"; 
$c = "!"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>
<body>
     <header><h1>Übung 1</h1></header>
  <main class="container">
    <?php
        
    echo $a . $b . $c; 
    //echo ""Text""; 
    echo "Text" . $a; 
    //echo "Text" $a . $b; 
    echo $a + $b; 
    echo $a + $b + $c; 
    echo $a * $b / $c; 
    echo ('<strong>\'Text\'</strong>' . $a ." Text " . $b);  
        
    ?>
</body>
</html>

