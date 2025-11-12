<?php
declare(strict_types=1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Übung 4 »u_while«</title>
    <style>
      table{
    border-collapse: collapse;
    margin: 20px 0;
}
td, th{
    border: 1px solid rgb(18, 15, 226);
    padding: 8px 10px;
    text-align: center;
}
    </style>
</head>
<body>
     <header><h1>Übung 4 »u_while«</h1></header>
  <main class="container">
 
  <table>
    <tr>
      <th>Spieler 1</th>
      <th>Spieler 2</th>
    </tr>
    <?php
    $spieler1P = 0;
    $spieler2p =0;

    while($spieler1P <25 && $spieler2p < 25){
      $wurf1 =rand(1, 6);
      $wurf2 =rand(1, 6);

      $spieler1P +=$wurf1;
      $spieler2p +=$wurf2;

      echo "<tr>";
      echo "  <td>" . $spieler1P . "</td>";
      echo "  <td>" .$spieler2p . "</td>";
      echo "</tr>";
    }

    if($spieler1P > $spieler2P){
      $gewinnen = "Spieler 1 hat gewonen";
    }
    elseif($spieler1P < $spieler2P){
      $gewinnen = "Spieler 2 hat gewonen";
    }
    else{
      $gewinnen = "Untenschieden";
    } 
   
?>
</table>
        <p><b><?php echo $gewinnen; ?></b></p>
</body>
</html>

