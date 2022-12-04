<?php

/**
 * Menghapus todo di list
 */
function removeTodoList(int $number): bool
{
    global $todoList;

    // Jika data melebihi size dari array todo list maka return false
    if ($number > sizeof($todoList)) {
        return false;
    }

    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($todoList[sizeof($todoList)]);

    return true;
}
