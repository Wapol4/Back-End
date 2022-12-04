<?php 
    require_once "data/manager.php";
    $manager = new Manager();
    $manager->name = "Budi";
    $manager->sayHello("Joko");

    $vicepresident = new vicePresident();
    $vicepresident->name = "Eko";
    $vicepresident->sayHello("Budi");
?>