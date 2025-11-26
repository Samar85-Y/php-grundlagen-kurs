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
        <p>Originaltext:</p>
        <textarea name="text" cols="10" rows="10">
        Freilebende Gummibärchen gibt es nicht. Man kauft sie in Packungen an der Kinokasse. Dieser Kauf ist der Beginn einer fast erotischen und sehr ambivalenten Beziehung Gummibärchen-Mensch. Zuerst genießt man. Dieser Genuss umfasst alle Sinne. 
        Man wühlt in den Gummibärchen, man fühlt sie. Gummibärchen haben eine Konsistenz wie weichgekochter Radiergummi. Die Tastempfindung geht auch ins Sexuelle. Das bedeutet nicht unbedingt, dass das Verhältnis zum Gummibärchen ein geschlechtliches wäre, denn prinzipiell sind diese geschlechtsneutral. 
        Nun sind Gummibärchen weder wabbelig noch zäh; sie stehen genau an der Grenze. Auch das macht sie spannend. Gummibärchen sind auf eine aufreizende Art weich. Und da sie weich sind, kann man sie auch ziehen. Ich mache das sehr gerne. 
       Ich sitze im dunklen Kino und ziehe meine Gummibärchen in die Länge - ganz, ganz langsam. Man will sie nicht kaputtmachen, und dann siegt doch die Neugier, wieviel Zug so ein Bärchen aushält. (Vorstellbar sind u.a. Gummibärchen-Expander für Kinder und Genesende).
        </textarea><br><br>  

        <p>Suchbegriff:</p><input type="text"><br><br>
        <button type="submit">Zeichenkette suchen</button>
</body>
</html>