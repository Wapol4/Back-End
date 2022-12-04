<?php 
    require_once "data/conflict.php";
    require_once "data/helper.php";

    $conflct1 = new \Data\One\Conflict();

    $conflct2 = new \Data\Two\Conflict();

    echo Helper\APPLICATION . PHP_EOL;
    Helper\helpMe();
?>