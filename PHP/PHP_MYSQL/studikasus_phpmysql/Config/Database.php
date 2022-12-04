<?php 

namespace Config{
    Class Database {

        static function getConnection(): \PDO
        {
            $host = "localhost";
            $port = 3306;
            $database = "belajar_php_todolist";
            $username = "root";
            $password = "Aji3faf01@";
            
            return new \PDO("mysql:host=$host:$port; dbname=$database", username:$username, password:$password);
        }
    }

}


?>