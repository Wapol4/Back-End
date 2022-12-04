<?php 
    // contructoro function pertama yang dipanggil ketika object dibuat
    require_once "data/person.php";

    $person = new Person("Eko", "Subang");
    var_dump($person);
?>