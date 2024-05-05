<?php

require_once __DIR__ . "/../Model/todoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Controller/AddTodoList.php";

function ViewAddTodoList() {
  echo "Add your To-do ";
  $todo = input("Enter a to-do item (or press 'x' to cancel): ");

  if ($todo == "x" || $todo == "X"){
    echo "Failed to add your list";
  } else {
    AddTodoList($todo);
  }
}