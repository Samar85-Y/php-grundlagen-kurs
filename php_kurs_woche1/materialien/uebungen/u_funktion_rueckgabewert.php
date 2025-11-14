<?php
    declare(strict_types=1);
    error_reporting(E_ALL);
    ini_set('display_errors', true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Übung 10 »u_funktion_rueckgabewert«</title>
</head>
<body>
     <header><h1>Übung 10 »u_funktion_rueckgabewert«</h1></header>
  <main class="container">
    <?php
            function bigger($a, $b){
                if($a > $b){
                    return $a;
                }
                else{
                    return $b;
                }
                }
                $c = bigger(3, 4);
                echo "Maximum numer ist: " . $c;


            
        ?>
</main> 
</table>
</body>
</html>

