<?php

require_once __DIR__ . "/Model/todoList.php";
require_once __DIR__ . "/Controller/ShowTodoList.php";
require_once __DIR__ . "/Controller/AddTodoList.php";
require_once __DIR__ . "/Controller/RemoveTodoList.php";
require_once __DIR__ . "/View/RemoveTodoList.php";
require_once __DIR__ . "/View/AddTodoList.php";
require_once __DIR__ . "/View/ViewTodoList.php";
require_once __DIR__ . "/Helper/Input.php";

echo "TodoList - CLI" . PHP_EOL;

ViewTodoList();