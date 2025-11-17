<?php
    
    declare(strict_types=1);
    error_reporting(E_ALL);
    ini_set('display_errors', true);
    session_start();
    require_once 'artikel.inc.php';
    if(!isset($_SESSION['warenkorb'])){
        $_SESSION['warenkorb'] = [];

    }
    $warenkorb = $_SESSION['warenkorb'];
    $gesamt =0;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ihr Wahrenkorb</title>
</head>
<body>
    <header>
        <h1>Ihr Wahrenkorb</h1>
    </header>
    <main>
        <?php
            
            if ((isset($_POST['schoko'])) || (isset($_POST['pralinen']))){
                echo '<pre>', print_r($_POST), '</pre>';
                foreach($_SESSION as $artnr => $artikel){

                }
            }



                foreach($_SESSION as $artnr => $menge){
                    if(str_starts_with($artnr, 's')){
                        <tr>

                        </tr>
                    }
                }
            
        ?>
    </main>
</body>
</html>