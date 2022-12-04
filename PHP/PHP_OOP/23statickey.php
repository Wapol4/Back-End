<?php 

    require_once "data/statickey.php";

    use Helper\mathHelper;

    echo mathHelper::$name . PHP_EOL;

    mathHelper::$name = "Eko Kurniawan";
    echo mathHelper::$name . PHP_EOL;

    $result = mathHelper::sum(10, 10, 10);
    echo "Result : $result" . PHP_EOL;

?>