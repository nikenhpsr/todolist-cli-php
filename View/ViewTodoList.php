<?php

require_once __DIR__ . "/../Model/todoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Controller/ShowTodoList.php";
require_once __DIR__ . "/RemoveTodoList.php";
require_once __DIR__ . "/AddTodoList.php";

function ViewTodoList() {
  while(true){
    ShowTodoList();

    echo "Menu" .PHP_EOL;
    echo "1. Add To-do List" .PHP_EOL;
    echo "2. Remove To-do List" . PHP_EOL;
    echo "X. Exit" . PHP_EOL;

    $option = input("Choose one of these options");

    if ($option == "1") {
      $todo = input("Enter a to-do item: ");
      AddTodoList($todo);
      ShowTodoList();
    } else if ($option == "2") {
      $index = input("Enter the index of the to-do item to remove: ");
      RemoveTodoList((int)$index);
    } else if ($option == "x" || $option == "X") {
      break;
    } else {
      echo "The system cannot process your request because the option you selected is not understood".PHP_EOL;
    }
  }

  echo "See you later".PHP_EOL;
}