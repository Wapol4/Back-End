<?php 
    require_once "data/conflict.php";
    require_once "data/helper.php";
    
    use Data\One\Conflict as Conflict1; //import alias
    use function Helper\{helpMe as help}; // Group use declaration
    use const Helper\APPLICATION;


    $conflict1 = new Conflict1();
    $conflict2 = new \Data\Two\Conflict();
    
    help();
    echo APPLICATION . PHP_EOL;

?>