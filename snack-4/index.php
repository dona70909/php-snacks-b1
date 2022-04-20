<?php 
    $random_numbs = 
    [

    ];

    while(count($random_numbs) < 15) { 
        $number = random_int(0,100);
        if(!array_key_exists($number,$random_numbs)){
            array_push($random_numbs,$number);
        }
    };

    //var_dump($random_numbs)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-4</title>
</head>
<body>
    <header>
        <h1>Snack-4</h1>
    </header>

    <main>
        <div>
            <h2>Randoms</h2>
            <ul>
                <?php for($i = 0; $i < count($random_numbs) ; $i++) { ?>
                    <li> <?php echo $random_numbs[$i] ?></li>
                <?php } ?>
            </ul>
        </div>
    </main>
</body>
</html>