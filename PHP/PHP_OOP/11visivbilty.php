<?php 
    require_once "data/product.php";

    $product = new Product("Apple", 2000);

    echo $product->getName() . PHP_EOL;
    echo $product->getPrice() . PHP_EOL;
?>