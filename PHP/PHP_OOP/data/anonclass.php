<?php 
use Data\Traits\sayHello;
    interface HelloWorld
    {
        public function sayHello(): void;
    }

    $helloworld = new class("Eko") implements HelloWorld
    {

        public string $name;

        public function __construct(string $name)
        {
            $this->name = $name; 
        }

        public function sayHello(): void
        {
            echo "Hello $this->name" . PHP_EOL;
        }
    };

    $helloworld->sayHello();

?>