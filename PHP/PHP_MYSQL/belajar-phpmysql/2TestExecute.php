<?php 

require_once __DIR__ . '/1GetConnection.php';

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ('kannedy14', 'Kannedy', 'kannedy@test.com');
SQL;

$connection->exec($sql);

$connection = null;

?>