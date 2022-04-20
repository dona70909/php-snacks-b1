<?php 
    $db =
    [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],

        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    
    $db_keys = array_keys($db);
    $db_values = array_values($db);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Teachers</title>
</head>
<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-3">
                    <h1 class="text-center">Teachers</h1>
                </div>
                <div class="box gray-box p-5 col-6">
                    <h2 class="text-uppercase mb-4"><?php echo $db_keys[0]?></h2>
                    <?php for($j = 0; $j < count($db_values[0]);$j++) { ?>
                        <div>
                            <p> <?php echo $db_values[0][$j]['name'] ?> </p>
                            <p> <?php echo $db_values[0][$j]['lastname'] ?> </p>
                        </div>
                        <hr>
                    <?php }?>
                </div>
            
                <div class="box green-box p-5 col-6">
                    <h2 class="text-uppercase mb-4"><?php echo $db_keys[1] ?></h2>
                    <?php for($j = 0; $j < count($db_values[1]);$j++) { ?>
                        <div>
                            <p> <?php echo $db_values[1][$j]['name'] ?> </p>
                            <p> <?php echo $db_values[1][$j]['lastname'] ?> </p>
                        </div>
                        <hr>
                    <?php }?>
                </div>   
            </div>
        </div>
    </main>
</body>
</html>