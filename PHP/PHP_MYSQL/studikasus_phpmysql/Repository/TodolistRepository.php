<?php

/*
    1. buatlah namespace Repository, nama project ditambah repository (TOdolisREpository)
    2. buat interface todo list repository , isinya adalah :
        - function save, -> Todolist entity $todolist , void
        - function remove, -> int number , bool
        - function findAll,-> () , array
    
*/

namespace Repository {

    use Entity\Todolist;

    interface TodolistRepository
    {

        function save(Todolist $todolist): void;

        function remove(int $number): bool;

        function findAll(): array;

    }

    /*
        1. buat todolistrepositoryimplement
        2. private array $todolist = array();



    */

    class TodolistRepositoryImpl implements TodolistRepository {

        public array $todolist = array();
        private \PDO $connection;

        public function __construct(\PDO $connection)
        {
            $this->connection = $connection;
        }

        function save(Todolist $todolist): void
        {
            // $number = sizeof($this->todolist) + 1;
            // $this->todolist[$number] = $todolist;

            $sql = "INSERT INTO todolist(todo) VALUES (?)";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$todolist->getTodo()]);
        }

        function remove(int $number): bool
        {
            // if ($number > sizeof($this->todolist)) {
            //     return false;
            // }

            // for ($i = $number; $i < sizeof($this->todolist); $i++) {
            //     $this->todolist[$i] = $this->todolist[$i + 1];
            // }

            // unset($this->todolist[sizeof($this->todolist)]);

            // return true;

            $sql = "SELECT id FROM todolist WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$number]);

            if($statement->fetch()){
                $sql = "DELETE FROM todolist WHERE id = ?";
                $statement = $this->connection->prepare($sql);
                $statement->execute([$number]);
                return true;
            }else{
                return false;
            }
        
        }

        function findAll(): array
        {
            // return $this->todolist;
            $sql = "SELECT id, todo FROM todolist";
            $statement = $this->connection->prepare($sql);
            $statement->execute();

            $result = [];


            // Array of data object resultin
            foreach ($statement as $row){
                $todolist = new Todolist();
                $todolist->setId($row['id']);
                $todolist->setTodo($row['todo']);

                $result[] = $todolist;
            }
            return $result;
        }
    }

}