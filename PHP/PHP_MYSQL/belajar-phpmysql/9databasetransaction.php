<?php 

require_once __DIR__ . '/1GetConnection.php';

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO coments(email, comment) VALUES ('e@test.com','E')"); 
$connection->exec("INSERT INTO coments(email, comment) VALUES ('f@test.com','F')"); 
$connection->exec("INSERT INTO coments(email, comment) VALUES ('g@test.com','G')"); 
$connection->exec("INSERT INTO coments(email, comment) VALUES ('h@test.com','H')"); 


// $connection->commit();
$connection->rollBack();

$connection = null;

?>