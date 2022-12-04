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

        function save(Todolist $todolist): void
        {
            $number = sizeof($this->todolist) + 1;
            $this->todolist[$number] = $todolist;
        }

        function remove(int $number): bool
        {
            if ($number > sizeof($this->todolist)) {
                return false;
            }

            for ($i = $number; $i < sizeof($this->todolist); $i++) {
                $this->todolist[$i] = $this->todolist[$i + 1];
            }

            unset($this->todolist[sizeof($this->todolist)]);

            return true;
        }

        function findAll(): array
        {
            return $this->todolist;
        }
    }

}
