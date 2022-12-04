<?php 
    function foo(){
        echo "FOO" . PHP_EOL;
    }

    $functionFoo = "foo";
    $functionFoo();

    function sayHello(string $name, $filter)
    {
        $finalName = $filter($name);
        echo "Hello $finalName" . PHP_EOL;

    }

    function sampleFunction(string $name): string
    {
        return "Sample $name";
    }

    sayHello("Eko", "sampleFunction");
?>