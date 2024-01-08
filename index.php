<?php 
    require_once __DIR__ ."/Models/Movie.php";
    require_once __DIR__ ."/Models/Genr.php";

    $movie1 = new Movie('Paura e Delirio a Las Vegas', '1.58', 1998, 'Terry Gilliam');
    $movie2 = new Movie('Il grande Lebowski', '1.57',1998,'Joel Coen');

    $movie1->getInfo();
    $movie2->getInfo();


?>