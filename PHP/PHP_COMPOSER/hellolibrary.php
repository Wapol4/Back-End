<?php 

require_once __DIR__ . '/vendor/autoload.php';

$customer =  new \airist4\php_library\Customer("Airist");
echo $customer->sayHello() . PHP_EOL;
echo $customer->sayHello("BUDI") . PHP_EOL;

?>