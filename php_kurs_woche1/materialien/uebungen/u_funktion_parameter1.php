<?php
declare(strict_types=1);
function anfang($name){
  
  echo "<p>Dieses Program wurde geschrieben von $name</p>";
}


function mitte($name){
  
  echo "<p>Dieses Program wurde geschrieben von $name</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Übung 6 »u_funktion_parameter1«</title>
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
     <header><h1>Übung 6 »u_funktion_parameter1«</h1></header>
  <main class="container">
 
  <table>
    <p>Anfang des Programms</p>
    <tr>
      <?php echo anfang('Samar')?>
    </tr>
    <p>Mitte des Programms</p>
    <tr>
      <?php echo mitte('Samar')?>
    </tr>
    <p>Ende des Programms</p>
</main> 
</table>
</body>
</html>

