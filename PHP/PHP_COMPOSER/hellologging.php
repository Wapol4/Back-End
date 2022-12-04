<?php 

require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("Airist");
$log->pushHandler(new StreamHandler("application.log", Logger::INFO));

$log->info("Hello, world!");
$log->info("Selamat belajar composer");


?>