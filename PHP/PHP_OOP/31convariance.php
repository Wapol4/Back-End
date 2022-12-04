<?php 
    require_once "data/convariance.php";
    require_once "data/abstract.php";

    $catShelter = new \Data\CatShelter();
    $cat = $catShelter->adopt("Luna");
    $cat->eat(new \Data\AnimalFoods());

    $dogShelter = new \Data\DogShelter();
    $dog = $dogShelter->adopt("Luna");
    

?>