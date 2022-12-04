<?php 
    class Programmer
    {
        public string $name;
        
        public function __construct(string $name)
        {
            $this->name = $name;
        }

    }

    class backEnd extends Programmer
    {
        
    }

    class frontEnd extends Programmer
    {

    }

    class Company {
        public Programmer $programmer;
    }

    function sayProgrammer(Programmer $programmer){
        // echo "Hello Programmer  $programmer->name" . PHP_EOL;
        if($programmer instanceof backEnd){
            echo "Hello Back-End Programmer  $programmer->name" . PHP_EOL;
        }else if ($programmer instanceof frontEnd){
            echo "Hello Front-End Programmer  $programmer->name" . PHP_EOL;
        } else if ($programmer instanceof Programmer){
            echo "Hello Programmer  $programmer->name" . PHP_EOL;
        }
    }

?>