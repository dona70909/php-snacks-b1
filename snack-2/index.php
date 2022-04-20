<?php

use function PHPSTORM_META\type;

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p>
            <?php 
                if((strlen($name) > 3) && (strpos($mail,"@") && strpos($mail,".")) && (is_numeric($age))) {
                    echo "Accesso Riuscito";
                } else {
                    echo "Accesso negat";
                }
            ?>
        </p>
    </div>
</body>
</html>