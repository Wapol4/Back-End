<?php 

require_once __DIR__ . "/vendor/autoload.php";

use Airist\Data\People;

$people = new People("Eko");

echo $people->sayHello("Eko") . PHP_EOL;

?>