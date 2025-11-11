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
     <header><h1>Übung 1: Kontrollstrukturen in PHP: switch </h1></header>
  <main class="container">
    <?php
        
     $punkte =10;

  
  switch($punkte){
    case 10: 
      echo "<p>  $punkte => Sehr gut</p>";
      break;
      case 9: 
      echo "<p>  $punkte => Gut </p>";
      break;
      case 8: 
      echo "<p>  $punkte => Befriedigend </p>";
      break;
      case 7: 
      echo "<p>  $punkte => Ausreichend</p>";
      break;
      
        default:
        echo "<p> weniger als 7: Leider zu wenige Punkte erreicht.</p>";
      }
?>
</body>
</html>

