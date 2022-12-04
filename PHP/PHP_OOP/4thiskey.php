<?php 

    require_once "data/person.php";

    $person = new Person("Eko", "Subang");
    $person->name = "Eko";
    
    $person->sayHello("Budi");
    $person->sayHello(null);
?>