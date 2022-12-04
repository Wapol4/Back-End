<?php 
    require_once "data/student.php";

    $student1 = new Student();
    $student1->id = "1";
    $student1->name = "Eko";
    $student1->value = 100;

    $string = (string) $student1; // kuncinya harus ada string
    echo $string;
    echo $student1 . PHP_EOL;

?>