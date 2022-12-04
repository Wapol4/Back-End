<?php 

require_once "data/student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Eko";
$student1->value = 100;

$student1(1, "eko", true, "kurniawan");
?>