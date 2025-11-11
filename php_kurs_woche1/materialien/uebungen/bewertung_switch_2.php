<?php
declare(strict_types=1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Kontrollstrukturen in PHP: switch</title>
</head>
<body>
     <header><h1>Übung 2: Kontrollstrukturen in PHP: switch </h1></header>
  <main class="container">
    <?php
        
     

  for($punkte=10; $punkte >= 0; $punkte--){
  
    switch($punkte){
    case 10: 
      echo "<p>   $punkte Punkte ergeben folgende Bewrtung: Sehr gut</p>";
      break;
      case 9: 
      echo "<p> $punkte Punkte ergeben folgende Bewrtung: Gut </p>";
      break;
      case 8: 
      echo "<p> $punkte Punkte ergeben folgende Bewrtung: Befriedigend </p>";
      break;
      case 7: 
      echo "<p>  $punkte Punkte ergeben folgende Bewrtung: Ausreichend</p>";
      break;
        default:
        echo "<p>  $punkte Punkte ergeben folgende Bewrtung: Leider zu wenige Punkte erreicht.</p>";
      }
    }
  
?>
</body>
</html>

