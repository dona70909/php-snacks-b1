<?php 
    $paragraph = "At PMQs Boris Johnson described Keir Starmer as “a Corbynista in a smart Islington suit”. This will come as a surprise to Oliver Eagleton, a New Left Review editor who this month is publishing The Starmer Project: A Journey to the Right. It is not just that Starmer does not even live in Islington. He is from Camden, but Johnson often claims Starmer lives in Islington, assuming that it is a better-known metonym for leftwing privilege. (Johnson should know; he lived in Islington himself for many years). It is that Starmer is not by any stretch a Corbynista. Eagleton’s book, which includes a particular thorough account of Starmer’s time as director of public prosecutions, argues that the Labour leader’s record “shows his evolution into an unabashed authoritarian”.";

    $array_phrase = explode(".",$paragraph);
    //var_dump($array_phrase);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pargraph</title>
</head>
<body>
    <header>
        <h1>The Guardian</h1>
    </header>

    <main>
        <div class="article">
            <h2>Title</h2>
            <div> 
                <?php for($i = 0; $i < count($array_phrase); $i++){?>
                    <p><?php echo $array_phrase[$i] ?>.</p>
                <?php }?>
            </div>
        </div>
    </main>
</body>
</html>