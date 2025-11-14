<?php
declare(strict_types=1);
$score = 83;
$note = "";

// Score größer als 90= Sehr gut, größer als 75 = Gut, alles andere Ok

if($score >=90){
  $note = "Sehe gut";
}
elseif($score >=75){
  $note = "Gut";
}
else{
  $note = "OK";
}



?>
<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>If/Else Beispiel</title>
  <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
  <header><h1>Kontrollstrukturen</h1></header>
  <main class="container">
    <p>Punkte: <?= $score ?> -> Note: <strong class="<?= $note ===
    'Sehr gut' ? 'good' : ($note === 'Gut' ? 'ok' : 'bad') ?>" ><?= $note ?></strong></p>
  <h2>Der Spaceship Operator</h2>
  <?php
    
    $i = 6;
    $k = 6;

    /**
     * Der Spaceship-Operator ergibt:
     * 1: der Linke Wert ist größer
     * -1: der Rechte Wert ist größer
     * 0: beide wert sind gleich
    */
    $erg = $i <=> $k;
    echo '<p>Das Ergebnis des Vergleichs ist: ' . $erg . '</p>';
    
  ?>
<h2>Der Null coalescing Operator</h2>
<?php
  
  $x = 5;
  $z = $y ?? $x;
  echo '<p>$z = $y ?? $x ergibt: ' . $z . '</p>';
  
?>

<h2>Switch</h2>
<?php
  echo '<p> beispiel #1: ';
  echo "<br>";
  $tag ="Dienstag";
  switch($tag){
    case 'Samstag':
      echo 'Wochenende (Sa.)';
      break;
    case 'Sonntag':
      echo 'Wochenende (So.)';
      break;
    default:
    echo 'Leider kein Wochenende.';
  }

  echo '</p>';
  
  $gewicht = 32;
  echo "<p> beispiel # 2: ";
  echo "<br>";
  echo "Das Gepächstück weigt $gewicht kg. Es gehört zur kategorie ";
  switch(true){
    case ($gewicht <=20):
    echo 'S (bis 20 kg)';
    break;
    case ($gewicht <=40):
    echo 'M (bis 40 kg)';
    break;
    default:
    echo 'M (über 40 kg)';
  }
  
  echo '.</p>';

  $note =3;
  echo "<p> beispiel # 3: </p>";
  
  switch($note){
    case 1: case 2: case 3: case 4:
      echo '<p class = "good"> Test bestanden</p>';
      break;
      case 5: case 6:
        echo '<p class = "bad"> Test nicht bestanden</p>';
        break;
        case 'nicht bewertet';
        echo '<p class = "ok"> Der Test konnte nict bewertet werden.</p>';
        break;
        default:
        echo '<p class = "bad"> Es wurde kein auswertbarer Wert erkannt.</p>';
      }
?>

<h2>Match</h2>
<?php
 
 $farbe = 'gelb';
 $ergebnis = match ($farbe) {
  'gruen', 'blau' => ' 0 gewinnt',
  'rot'   => 'rote Zahlen gewinnen',
  'schwarz' => 'schwarze Zahlen gewinnen',
  default => 'kein korrekter Wert'
 };

 echo "<p> Die Farbe ist $farbe.</p>";
 echo "<p><code>match()</code> gibt zurück: $ergebnis.</p>";
  
  
?>
</main>
</body>
</html>
