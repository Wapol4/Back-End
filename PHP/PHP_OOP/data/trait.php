<?php 
    namespace Data\Traits;

    trait sayGoodBye
    {   
        public string $name;
        function goodBye(?string $name): void{
            if(is_null($name)){
                echo "Good Bye" . PHP_EOL;
            } else {
                echo "$name Good Bye" . PHP_EOL;
            }
        }
    }


    trait sayHello
    {   
        public string $name;
        function hello(?string $name): void{
            if(is_null($name)){
                echo "Hello" . PHP_EOL;
            } else {
                echo "Hello $name" . PHP_EOL;
            }
        }
    }

    trait hasName
    {
        public string $name;
    }

    trait canRun
    {
        public abstract function run(): void;
    }

    class parentPerson {
        public function goodBye(?string $name): void
        {
            echo "Good bye in Person" . PHP_EOL;
        }

        public function hello(?string $name): void
        {
            echo "Hello in Person" . PHP_EOL;
        }
    }

    trait All {
        use sayGoodBye, sayHello, hasName;
    }

    class Person extends parentPerson{
        use All;
        public function run(): void
        {
            echo "Person $this->name is running" . PHP_EOL;
        }    

    }


?>