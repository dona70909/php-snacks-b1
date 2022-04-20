<?php 
    $posts =
    [
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
    ];

    $posts_dates_keys = array_keys($posts);
    $post_content = array_values($posts);


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
        <div class="container-posts">
            <?php for($i = 0; $i < count($posts_dates_keys); $i++) { ?>
                <h2>Post Date: <?php echo $posts_dates_keys[$i] ?> </h2>
                <?php  for($j = 0; $j < count($post_content[$i]); $j++) { ?>
                    <h3><?php echo $post_content[$i][$j]['title']; ?></h3>
                    <p><?php echo $post_content[$i][$j]['text']; ?></p>
                    <em><?php echo $post_content[$i][$j]['author']; ?></em>
                <?php } ?>    
            <?php } ?>
        </div>
    </main>
</body>
</html>