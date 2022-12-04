<?php 
    require_once "data/person.php";
    $person = new Person("Eko", "Subang");
    
    define("APPLICATION","Belajar PHP OOP");
    const APP_VERSION = "1.0.0";

    echo APPLICATION . PHP_EOL;
    echo APP_VERSION . PHP_EOL;
    echo Person::AUTHOR . PHP_EOL;

    $person->info();

?>