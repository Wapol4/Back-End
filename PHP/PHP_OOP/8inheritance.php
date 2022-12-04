<?php 
    // Class TUrunan dari parents 
    require_once "data/manager.php";

    $manager = new Manager();
    $manager->name = "Budi";
    $manager->sayHello("Joko");

    $vp = new vicePresident();
    $vp->name = "Eko";
    $vp->sayHello("Kurniawan");
?>