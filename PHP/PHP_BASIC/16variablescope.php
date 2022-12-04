<?php 
    $name = "Eko"; //Global scope

    function sayHello(){
        $name = "Kurniawan"; // Local scope
        echo "$name" .PHP_EOL;
    }
?>