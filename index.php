<?php
require_once __DIR__ . "/Model/Movie.php";
require_once __DIR__ . "/Model/Actor.php";
require_once __DIR__ . "/data/db.php";

//istanzio 2 oggetti movie di 2 film
// $jumanji = new Movie('Jumanji', 'Jake Kasadan', ['action', 'comic', 'adventure']);
// $ironman = new Movie('IronMan', 'Jon Favreau', ['action', 'fantasy']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <div class="container">
        <h1>Movies</h1>
        <!-- Stampo a schermo i due oggetti movie che sono stati istanziati -->
        <!-- <p><b>Movie:</b> <?//php echo $jumanji -> printName() ?></p>
        <p><b>Director:</b> <?//php echo $jumanji -> director ?></p>
            <p><p><b>Movie:</b> <?//php echo $ironman -> printName() ?> </p>
        <b>Director:</b> <?//php echo $ironman -> director ?></p> -->
        <ul>
            <?php foreach($db as $movie): ?>
                <!-- stampo i film -->
                <li class="my-4">
                    <div><b>Movie Tile:</b> <?php echo $movie->printName() ?></div>
                    <div><b>Director:</b> <?php echo $movie->director ?></div>
                    <!-- stampo tutti i generi -->
                    <div><b>Genre:</b>
                        <ul>
                            <?php foreach($movie->genre as $genre):?>
                        <li><?php echo $genre ?></li>
                        <?php endforeach;?>
                        </ul>
                    </div>
                    <!-- stampo tutto il cast -->
                    <div><b>Cast:</b>
                        <ul>
                            <?php foreach($movie->cast as $actor):?>
                                <li><?php echo $actor->getFullName() ?></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </li>
                <hr>
            <?php endforeach; ?>
        </ul>
    </div>
    
</body>
</html>