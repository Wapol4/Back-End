<?php 

// ANONYMOSU FUNCTION
$sayHello = function (string $sapa){
    echo "Selamat pagi $sapa!" . PHP_EOL;
};

$sayHello("Eko");

// DALAM ARGUMENT
function sayGoodbye(string $name, $filter){
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodbye("Eko", $filterFunction);

// MENGAKSES VARIABLE
$firstname = "Eko";
$lastname = "Kurniawan";

$sayHelloEko = function() use ($firstname, $lastname){
    echo "Hello $firstname $lastname" . PHP_EOL;
};

$sayHelloEko();
?>