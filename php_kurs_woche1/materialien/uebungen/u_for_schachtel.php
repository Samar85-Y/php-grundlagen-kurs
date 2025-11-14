<?php
declare(strict_types=1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Übung 2 »u_for_schachtel««</title>
</head>
<body>
     <header><h1>Übung 2 »u_for_schachtel«</h1></header>
  <main class="container">
    <?php
        
     

  for($i = 1; $i <= 10; $i++){
    for($n = 1; $n <= 10; $n++){
      $z = $i * $n;
      echo $z . " ";
    }
    echo "<br>";
    
    }
  

  
?>
</body>
</html>

