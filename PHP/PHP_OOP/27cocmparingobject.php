<?php 
    require_once "data/student.php";


    $student1 = new Student();
    $student1->id = "1";

    $student2 = new Student();
    $student2->id = "1";

    var_dump($student1 == $student2);
    var_dump($student1 === $student2);

?>