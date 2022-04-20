<?php 
$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1',
        ],

        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1',
        ],
    ],

    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1',
        ],
    ],

    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1',
        ],

        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1',
        ],

        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1',
        ],
    ],
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
        <h1>POSTS</h1>
    </header>

    <main>
        <?php
            $posts_keys = array_keys($posts[$i]);
            for($i = 0; $i<count($posts_keys); $i++) {
                var_dump($posts_keys[$i]);
                
            }
        ?>
    </main>
</body>
</html>