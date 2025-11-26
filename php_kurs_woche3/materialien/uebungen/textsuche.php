<?php 
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors','1');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../php_kurs_woche3/style/style.css">
    <title>Übung Kapitel 9 _ Textsuche</title>
</head>
<body>
    <header>
        <h1>Begriff in einer Textpassage suchen</h1>
    </header>
        
        <form method="POST">
            <label class="textarea-label" for="textfeld">Originaltext:</label>
            <textarea name="textfeld" id="textfeld">
        Freilebende Gummibärchen gibt es nicht. Man kauft sie in Packungen an der Kinokasse. Dieser Kauf ist der Beginn einer fast erotischen und sehr ambivalenten Beziehung Gummibärchen-Mensch. Zuerst genießt man. Dieser Genuss umfasst alle Sinne. 
        Man wühlt in den Gummibärchen, man fühlt sie. Gummibärchen haben eine Konsistenz wie weichgekochter Radiergummi. Die Tastempfindung geht auch ins Sexuelle. Das bedeutet nicht unbedingt, dass das Verhältnis zum Gummibärchen ein geschlechtliches wäre, denn prinzipiell sind diese geschlechtsneutral. 
        Nun sind Gummibärchen weder wabbelig noch zäh; sie stehen genau an der Grenze. Auch das macht sie spannend. Gummibärchen sind auf eine aufreizende Art weich. Und da sie weich sind, kann man sie auch ziehen. Ich mache das sehr gerne. 
       Ich sitze im dunklen Kino und ziehe meine Gummibärchen in die Länge - ganz, ganz langsam. Man will sie nicht kaputtmachen, und dann siegt doch die Neugier, wieviel Zug so ein Bärchen aushält. (Vorstellbar sind u.a. Gummibärchen-Expander für Kinder und Genesende).
            <?php echo isset($_POST['textfeld']) ? htmlspecialchars($_POST['textfeld']) : ''; ?>
        
        </textarea><br><br>  

        <label for="suchbegriff">Suche nach:</label>
        <input type="text" name="suchbegriff" id="suchbegriff" value="<?php echo isset($_POST['suchbegriff']) ? htmlspecialchars($_POST['suchbegriff']) : ''; ?>">
        
        <button type="submit">Zeichenkette suchen</button>
        </form>

         <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Prüfung ob $_POST-Variable für Suchbegriff vorhanden ist
            if (isset($_POST['suchbegriff']) && isset($_POST['textfeld'])) {
                $suchbegriff = $_POST['suchbegriff'];
                $text = $_POST['textfeld'];
                
                // Wenn Suchbegriff nicht leer ist
                if (!empty($suchbegriff) && !empty($text)) {
                    // Anzahl der Treffer mit substr_count() ermitteln
                    $anzahl = substr_count($text, $suchbegriff);
                    
                    echo '<div class="result">';
                    echo '<h2>Suchergebnis:</h2>';
                    echo '<p><strong>Suchbegriff:</strong> "' . htmlspecialchars($suchbegriff) . '"</p>';
                    echo '<p><strong>Anzahl der Fundstellen:</strong> ' . $anzahl . '</p>';
                    
                    if ($anzahl > 0) {
                        // Text mit markierten Fundstellen ausgeben (str_replace())
                        $markierter_text = str_replace(
                            $suchbegriff, 
                            '<span class="highlight">' . htmlspecialchars($suchbegriff) . '</span>', 
                            htmlspecialchars($text)
                        );
                        
                        echo '<div class="highlighted-text">';
                        echo '<strong>Text mit markierten Fundstellen:</strong><br><br>';
                        echo nl2br($markierter_text);
                        echo '</div>';
                    } else {
                        echo '<p style="color: #666;">Der Suchbegriff wurde im Text nicht gefunden.</p>';
                    }
                    echo '</div>';
                } else {
                    echo '<div class="result">';
                    echo '<p style="color: #d9534f;">Bitte füllen Sie beide Felder aus!</p>';
                    echo '</div>';
                }
            }
        }
        ?>
    </div>

</body>
</html>
