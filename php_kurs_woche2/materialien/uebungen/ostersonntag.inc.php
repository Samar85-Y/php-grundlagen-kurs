


<?php
/* Eine Beschreibung der Formel von Gauß:
Ostern fällt im Jahr J auf den (e+D+1)-ten Tag nach dem 21. März, wobei gilt:


d = ((15 + J/100 – J/400 – (8 * J/100 + 13) / 25) mod 30 + 19 * (J mod 19)) mod 30
   Falls d = 29, ist D = 28.
   Falls d = 28 und J mod 17 >= 11, ist D = 27.
   Falls d weder 28 noch 29, ist D = d.


e = (2 * (J mod 4) + 4 * (J mod 7) + 6 * D + (6 + J/100 – J/400 – 2) mod 7) mod 7


Zur Umsetzung der Formel in einem PHP-Programm gibt es die beiden folgenden Hinweise:


1) "mod" entspricht dem Operator Modulo (%) aus PHP.
   Dies ist also der ganzzahlige Rest einer Division.


2) Alle vorkommenden Divisionen (zum Beispiel J/100) sind Ganzzahldivisionen.
   Die Stellen hinter dem Komma werden dabei abgeschnitten.
   Dazu können Sie seit PHP 7.0 die Funktion intdiv() benutzen. Ein Beispiel:
      Der Ausdruck 1952/100 ergibt den Wert 19.52 (mit Nachkommastellen).
      Der Aufruf intdiv(1952/100) ergibt den Wert 19 ohne Nachkommastellen, also eine Ganzzahldivision. */


function ostersonntag($jahr) {
    
    /* Das Jahr wird über den Parameter $j an die Funktion geliefert.
   $t und $m sind Referenzen für die Variablen für Tag und Monat.
   Die Werte stehen nach dem Aufruf der Funktion an der Aufrufstelle zur Verfügung.


   Innerhalb der Funktion wird das Ergebnis in einzelnen Schritten bestimmt:
      Der Wert von $d wird gemäß der Formel errechnet.
      Der Wert von $D ergibt sich nach einer Verzweigung aus $d.
      Der Wert von $e wird gemäß der Formel errechnet.
      Liegt der errechnete Tag nicht mehr im Monat März, müssen Tag und Monat
         auf den entsprechenden Tag im Monat April umgerechnet werden. Ein Beispiel:
         Aus dem 36.03. wird der 05.04.
      Die Zahlen werden in Text umgewandelt.
      Bei einstelligen Zahlen wird eine Null vorangestellt. 
      */

    $a = $jahr % 19;                    // Position im 19-jährigen Mondzyklus (Metonischer Zyklus)
    $b = $jahr % 4;                     // Position im 4-jährigen Schaltzyklus
    $c = $jahr % 7;                     // Position im 7-Tage-Wochenzyklus
    
    
    $k = floor($jahr / 100);            // Jahrhundert (z.B. 20 für 2024)
    $p = floor((13 + 8 * $k) / 25);     // Säkulare Mondgleichung
    $q = floor($k / 4);                 // Säkulare Sonnengleichung
    
    
    $m = (15 - $p + $k - $q) % 30;      // Mondparameter
    $n = (4 + $k - $q) % 7;             // Sonnenparameter
    
    
    $d = (19 * $a + $m) % 30;           // Anzahl Tage vom 21. März bis zum Vollmond
    $e = (2 * $b + 4 * $c + 6 * $d + $n) % 7;  // Anzahl Tage vom Vollmond bis zum nächsten Sonntag
    
    // Berechnung des Ostersonntags als Tagesnummer im Jahr
    $ostertag = 22 + $d + $e;
    
    // Umrechnung in Tag und Monat
    if ($ostertag == 57) {
        
        $tag = 19;
        $monat = 4;
        
    } elseif ($ostertag == 56 && $d == 28 && $e == 6 && $a > 10) {
        
        $tag = 18;
        $monat = 4;
        
    } elseif ($ostertag > 31) {
        
        $tag = $ostertag - 31;
        $monat = 4;
        
    } else {
        
        $tag = $ostertag;
        $monat = 3;
    }
    
    return sprintf("%02d.%02d.%d", $tag, $monat, $jahr); // Rückgabe des Datums im Format TT.MM.JJJJ
    }
?>
