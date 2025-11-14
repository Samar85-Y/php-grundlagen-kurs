<?php
declare(strict_types=1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Übung 3 »u_tabelle«</title>

    <style>table{
    border-collapse: collapse;
}
td{
    border: 1px solid rgb(18, 15, 226);
    padding: 8px 10px;
    text-align: center;
}</style>
</head>
<body>
     <header><h1>Übung 3 »u_tabelle«</h1></header>
  <main class="container">
 
  <table>
    
    <?php
  for($i = 1; $i <= 10; $i++){
    echo "<tr>";
    for($n = 1; $n <= 10; $n++){
      $z = $i * $n;
      echo " <td>" . $z . "</td>";
      
    }
   echo "</tr>"; 
    
    }
   
?>
</table>
</body>
</html>

