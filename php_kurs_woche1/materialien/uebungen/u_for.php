<?php
declare(strict_types=1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Übung 1 »u_for«</title>
</head>
<body>
     <header><h1>Übung 1 »u_for« </h1></header>
  <main class="container">
    <?php
        
     

  for($i = 13; $i <= 29; $i+=4){
  
    echo $i . " ";
    }
  echo "<br>";

  for($i = 2; $i >= -1; $i-=0.5){
  
    echo $i . " ";
    }
  echo "<br>";

  for($i = 2000; $i <= 6000; $i+=1000){
  
    echo $i . " ";
    }
  echo "<br>";

  for($i = 5; $i <= 13; $i+=2){
  
    echo "Z" . $i . " ";
    }
  echo "<br>";

  for($i = 1; $i <= 3; $i++){
  
    echo "a b" . $i . " ";
    }
  echo "<br>";

  for($i = 2; $i <= 23; $i+=10){
  
    echo "c" . $i . " ";
    if($i<23){
      echo "c" . ($i + 1) . " ";
    }
    }
  echo "<br>";

  for($i = 13; $i <= 21; $i+=4){
  
    echo $i . " ";
    }
     for($i = 33; $i <= 45; $i+=4){
  
    echo $i . " ";
    }

  echo "<br>";
?>
</body>
</html>

