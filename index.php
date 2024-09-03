<?php
require_once __DIR__ . "/model/movie.php";

//istanzio 2 oggetti movie di 2 film
$jumanji = new Movie('Jumanji', 'Jake Kasadan');
$ironman = new Movie('IronMan', 'Fratelli Russo');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <h1>Movies</h1>
    <!-- Stampo a schermo i due oggetti movie che sono stati istanziati -->
   <p><b>Movie:</b> <?php echo $jumanji -> printName() ?> <b>Director:</b> <?php echo $jumanji -> director ?></p>
   <p><b>Movie:</b> <?php echo $ironman -> printName() ?> <b>Director:</b> <?php echo $ironman -> director ?></p>
</body>
</html>