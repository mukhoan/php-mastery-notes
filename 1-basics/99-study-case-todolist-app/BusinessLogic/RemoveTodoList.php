<?php

/**
 * Remove a todo from the todo list
 */
function removeTodoList(int $number): bool
{
    global $todoList;

    if ($number > sizeof($todoList)) {
        return false;
    }

    if ($number <= 0) {
        return false;
    }

    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($todoList[sizeof($todoList)]);

    return true;
}