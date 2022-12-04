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

foreach ($prepareStatement as $row) {
    $success = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "Sukses Login:" . $find_user . PHP_EOL;
} else {
    echo "Gagal Login " . PHP_EOL;
}

$connection = null;


?>