<?php

/* 
    1. Buatlah namespace Entity
    2. Buat class Todolist
    3. BUat function getTodo, setTodo, construct
        dimana menggunakan this->todo (variabel private)

*/


namespace Entity {

    class Todolist
    {

        // data todo
        private string $todo;

        // __construct digunakan untuk function yang pertama kali di panggil

        public function __construct(string $todo = "")
        {
            $this->todo = $todo;
        }

        public function getTodo(): string
        {
            return $this->todo;
        }

        public function setTodo(string $todo): void
        {
            $this->todo = $todo;
        }

    }

}
