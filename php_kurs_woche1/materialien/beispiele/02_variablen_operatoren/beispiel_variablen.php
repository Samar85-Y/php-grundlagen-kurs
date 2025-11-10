<?php
declare(strict_types=1);
$name = 'Samar';
$age =40;
$lucky = 2;
$sum = $age + $lucky;

/* 
Arithmetische Operatoren
+Addition
-Subtraktion
/Division
*Multiplikation
%Modulo (Rest einer Division)


Verkettungs Operator (Konkatenator)
.

Vergleichs-Operaroren
< kleiner als
> größer als
<= kleiner gleich
>= größer gleich
== ist gleich
=== ist identisch
!= ist ungleich
!== nict identisch

*/
?>
<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Variablen & Operatoren</title>
  <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
  <header><h1>Variablen & Operatoren</h1></header>
  <main class="container">
    <p>Hallo <?= htmlspecialchars($name);  ?>, du bist <?= $age; ?> Jahr alt.</p>
    <p> Glückszahl: <?= $lucky; ?> -> Summe: <?= $sum ?></p>
  </main>
</body>
</html>
