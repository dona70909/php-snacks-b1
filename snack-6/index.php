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
        <section class="container-fluid p-5">
            <div class="row border p-2">
                <?php for($i = 0; $i< count($db_keys); $i++) { ?>
                    <div class="col-12">
                        <h1 class="text-center text-uppercase p-3"><?php echo $db_keys[$i] ?></h1>
                    </div>
                    <div class="col-12 d-flex justify-content-center p-0">
                        <?php for($j = 0; $j < count($db_values); $j++) { ?>
                            <?php if(strcmp($db_keys[$i],'teachers') == 1) { ?>
                                <div class="gray-box col-3 p-2">
                                    <p><?php echo $db_values[$i][$j]["name"] ?></p>
                                    <p><?php echo $db_values[$i][$j]["lastname"] ?></p>
                                </div>
                            <?php } else { ?>
                                <div class="green-box col-3 p-2">
                                    <p><?php echo $db_values[$i][$j]["name"] ?></p>
                                    <p><?php echo $db_values[$i][$j]["lastname"] ?></p>
                                </div>
                            <?php }?> 
                        <?php } ?>  
                    </div>
                <?php }; ?>   
            </div>
        </section>

        <section class="container-fluid p-5">
            <div class="row border p-3">
                <?php foreach($db as $value => $inner_array) { ?>
                    <div class="col-12  p-3">
                        <h2 class="text-uppercase text-center"> <?php echo $value ?> </h2>
                    </div>

                    <div class="col-12 d-flex justify-content-center align-items-center p-4">
                        <?php foreach($inner_array as $sub_array => $content) { ?>
                            <?php if($value == "teachers") { ?>
                                <div class="col-3 gray-box p-3">
                                    <p>Name: <?php echo $content["name"]; ?>
                                    <p>Lastname: <?php echo $content["lastname"]; ?> </p>
                                </div>
                                
                            <?php } else { ?>
                                <div class="col-3 green-box p-3">
                                    <p>Name: <?php echo $content["name"]; ?>
                                    <p>Lastname: <?php echo $content["lastname"]; ?> </p>
                                </div>
                                
                            <?php } ?>        
                        <?php } ?>
                    </div>
                <?php  } ?>
            </div>
        </section>
    </main>
</body>
</html>