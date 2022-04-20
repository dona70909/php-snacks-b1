<!-- 
    /**
     * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
     * Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti  dalla squadra ospite.
     * Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
     */
-->
<?php
$basket_matches = [
    [
        "team" => "Olimpia Milano",
        "guest_team" => "Roma Wolves",
        "score_team" => 50,
        "score_guest" => 80,
    ],

    [
        "team" => "Miami Heat",
        "guest_team" => "Boston Celtic",
        "score_team" => 50,
        "score_guest" => 60,
    ],

    [
        "team" => "Los Angeles Lakers ",
        "guest_team" => "Toronto Raptors",
        "score_team" => 50,
        "score_guest" => 60,
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket</title>
</head>
<body>
    <header>
        <h1>Basket</h1>
    </header>

    <main>
        <div>
            <h2>Basket Match</h2>
            <!--  <p>
                <?php 
                    for($i = 0; $i < count($basket_matches); $i++){
                        var_dump($basket_matches[$i]);
                    }
                ?>
            </p> -->

            <ul>
                <?php for($i = 0; $i < count($basket_matches); $i++){?>

                    <li>
                        <span><?php echo $basket_matches[$i]["team"] ?> - </span>
                        <span><?php echo $basket_matches[$i]["guest_team"] ?> | </span>
                        <span><?php echo $basket_matches[$i]["score_team"] ?> - </span>
                        <span><?php echo $basket_matches[$i]["score_guest"] ?></span>
                    </li>
                <?php } ?>
        
            </ul>
        </div>
    </main>
</body>
</html>