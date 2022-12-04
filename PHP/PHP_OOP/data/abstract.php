<?php 
    require_once "food.php";
    namespace Data;

    abstract class Animal {
        public string $name;

        abstract public function run(): void;

        abstract public function eat(AnimalFoods $animalFood): void;
    }

    class Cat extends Animal
    {
        public function run(): void
        {
            echo "Cat $this->name is running" . PHP_EOL;
        }

        public function eat(AnimalFoods $animalFoods): void
        {
            echo "Cat is Eating". PHP_EOL;
        }
    }

    class Dog extends Animal
    {
        public function run(): void
        {
            echo "Dog $this->name is running" . PHP_EOL;
        }

        public function eat(AnimalFoods $animalFoods): void
        {
            echo "Dog is Eating" . PHP_EOL;
        }
    }
?>