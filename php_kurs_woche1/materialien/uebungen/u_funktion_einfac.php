<?php
declare(strict_types=1);
function anfang(){
  
  echo "<p>Dieses Program wurde geschrieben von Samar</p>";
}


function mitte(){
  
  echo "<p>Dieses Program wurde geschrieben von Samar</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Übung 5 »u_funktion_einfach«</title>
    <style>
      table{
    border-collapse: collapse;
    margin: 20px 0;
}
tr{
    border: 5px solid rgba(26, 14, 1, 1);
    padding: 8px 10px;
    text-align: center;
}
    </style>
</head>
<body>
     <header><h1>Übung 5 »u_funktion_einfach«</h1></header>
  <main class="container">
 
  <table>
    <p>Anfang des Programms</p>
    <tr>
      <?php echo anfang()?>
    </tr>
    <p>Mitte des Programms</p>
    <tr>
      <?php echo mitte()?>
    </tr>
    <p>Ende des Programms</p>
</main> 
</table>
</body>
</html>

