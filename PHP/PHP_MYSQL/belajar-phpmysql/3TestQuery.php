<?php 

require_once __DIR__ . '/1GetConnection.php';

$connection = getConnection();

$sql = "SELECT id, name, email FROM customers";
$result = $connection->query($sql);
foreach ($result as $row){
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];

    echo "ID : $id" . PHP_EOL;
    echo "NAME : $name" . PHP_EOL;
    echo "EMAIL : $email" . PHP_EOL;

}

$connection = null;


?>