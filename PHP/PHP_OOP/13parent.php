<?php 
    require_once "data/shape.php";

    use Data\{Shape, Rectagle};

    $shape = new Shape();
    echo $shape->getCorner() . PHP_EOL;

    $rectangle = new Rectagle();
    echo $rectangle->getCorner() . PHP_EOL;
    echo $rectangle->getCornerParent() . PHP_EOL;
?>