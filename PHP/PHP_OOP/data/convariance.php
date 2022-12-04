<?php 

    namespace Data;
    require_once "data/abstract.php";

    // Covariance mengovveride function dari parent class
     interface AnimalShelter 
     {
        function adopt(string $name): Animal;
     }

     class DogShelter implements AnimalShelter 
     {
        public function adopt(string $name): Dog
        {
            $dog = new Dog();
            $dog->name = $name;
            return $dog;
        }
     }

     class CatShelter implements AnimalShelter
     {
        public function adopt(string $name): Cat
        {
            $cat = new Cat();
            $cat->name = $name;
            return $cat;
        }
     }

?>