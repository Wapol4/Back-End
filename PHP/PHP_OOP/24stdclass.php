<?php 

    $array = [
        "firstname" => "Eko",
        "midname" => "Kurniwan",
        "lastname" => "Kanedi"
    ];

    $object = (object) $array;

    var_dump($object);

    echo "First Name $object->firstname" . PHP_EOL;
    echo "Mid Name $object->midname" . PHP_EOL;
    echo "Last Name $object->lastname" . PHP_EOL;

    require_once "data/person.php";

    $person = new Person("Eko", "Subang");

    $arrayPerson = (array) $person;
    var_dump($arrayPerson);
?>