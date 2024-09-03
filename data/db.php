<?php
require_once __DIR__ . '/../Model/Movie.php';
require_once __DIR__ . '/../Model/Actor.php';

$db = [
    new Movie('Jumanji', 'Jake Kasadan', ['action', 'comic', 'adventure'], [new Actor('Dwayne', 'Johnson'), new Actor('Kevin', 'Hart')]),
    
    new Movie('IronMan', 'Jon Favreau', ['action', 'fantasy'], [new Actor('Robert', 'Downey Jr.'), new Actor('Gwyneth', 'Paltrow')]),
];




