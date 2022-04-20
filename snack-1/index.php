<?php
$basket_matches = [
    [
        "team" => "Olimpia Milano",
        "guest_team" => "Roma Wolves",
        "score_team" => 50,
        "score_guests" => 80,
    ],

    [
        "team" => "Olimpia Milano",
        "guest_team" => "Roma Wolves",
        "score_team" => 50,
        "score_guests" => 80,
    ]
]

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
    <header>
        <h1>Basket</h1>
    </header>

    <main>
        <div>
            <h2>Basket Match</h2>
            <p>
                <?php 
                    for($i = 0; $i < count($basket_matches); $i++){
                        var_dump($basket_matches[$i]);
                    }
                ?>
            </p>
        </div>
    </main>
</body>
</html>