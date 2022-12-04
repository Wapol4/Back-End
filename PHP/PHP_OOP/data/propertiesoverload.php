<?php 

    class Zero
    {
        private array $properties=[];

        // KETIKA TIDAK ADA PROPERTIE FUNCTION AKAN DI PAKE
        public function __get($name)
        {
            return $this->properties[$name];
        }

        public function __set($name, $value)
        {
            return $this->properties[$name] = $value;
        }

        public function __isset($name)
        {
            return isset($this->properties[$name]);
            
        }

        public function __unset($name)
        {
            unset($this->properties[$name]);
        }
    }

    $zero = new Zero();
    $zero->firstname = "Eko";
    $zero->middlename = "Kurniawan";
    $zero->lastname = "Kannedi";

    echo "FIRST NAME : $zero->firstname" . PHP_EOL;
    echo "MIDDLE NAME : $zero->middlename" . PHP_EOL;
    echo "LAST NAME : $zero->lastname" . PHP_EOL;


?>