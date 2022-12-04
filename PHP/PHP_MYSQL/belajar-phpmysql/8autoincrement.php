<?php 

require_once __DIR__ . '/1GetConnection.php';

$connection = getConnection();

$connection->exec("INSERT INTO coments(email, comment) VALUES ('eko@test.com','H')"); 
$id = $connection->lastInsertId();

echo $id . PHP_EOL;

$connection = null;

?>