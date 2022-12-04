<?php 
    require_once "data/trait.php";

    use Data\Traits\{Person, sayGoodBye, sayHello};

    $person = new Person();
    $person->goodBye("Joko");
    $person->hello("BUdi");
    $person->name = "Eko";
    var_dump($person);
    $person->run();
?>