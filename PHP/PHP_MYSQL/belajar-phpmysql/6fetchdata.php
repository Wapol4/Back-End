<?php 

require_once __DIR__ . '/1GetConnection.php';

$connection = getConnection();

$username = "admin";
$password = "admin";


// $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
// $prepareStatement = $connection->prepare($sql);
// $prepareStatement->bindParam("username", $username);
// $prepareStatement->bindParam("password", $password);
$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$prepareStatement = $connection->prepare($sql);
// $prepareStatement->bindParam(1, $username);
// $prepareStatement->bindParam(2, $password);
$prepareStatement->execute([$username,$password]);

if($row = $prepareStatement->fetch()){
    echo "SUKSES LOGIN : " . $row["username"] . PHP_EOL;
} else {
    echo "GAGAL LOGIN" . PHP_EOL;
}

var_dump($row);

$connection = null;


?>