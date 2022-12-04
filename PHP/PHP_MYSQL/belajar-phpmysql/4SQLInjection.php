<?php 


require_once __DIR__ . '/1GetConnection.php';

$connection = getConnection();

$username = $connection->quote("admin");
$password = $connection->quote("admin");
$sql = "SELECT * FROM admin WHERE username = $username AND password = $password;";

echo $sql . PHP_EOL;

$result = $connection->query($sql);

$success = false;
$find_user = null;

foreach ($result as $row) {
    $success = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "Sukses Login " . $find_user . PHP_EOL;
} else {
    echo "Gagal Login " . PHP_EOL;
}

$connection = null;

?>