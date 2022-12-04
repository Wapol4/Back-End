<?php 
    require_once "data/person.php";
    
    $person1 = new Person("Eko", "Subang");
    $person1->name = "Eko";
    $person1->address = "Subang";
    $person1->country = "Indonesia";
    var_dump($person1);

    echo "Name : $person1->name" . PHP_EOL;
    echo "Address : $person1->address" . PHP_EOL;
    echo "Country : $person1->country" . PHP_EOL;
?>