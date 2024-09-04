<?php

require_once __DIR__ . '/../Model/Movie.php';

$db = [
    new Movie('Wolverine', 120, 'action'), new Movie('Iron Man 1', 150, 'action'),
    new Movie('Captain America', 130, 'survival'), new Movie('Wonder Woman', 115, 'superheroes'),
];

?>