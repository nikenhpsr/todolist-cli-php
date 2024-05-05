<?php

require_once __DIR__ . "/../Model/todoList.php";
require_once __DIR__ . "/../Controller/RemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function ViewRemoveTodo() {
 echo "Delete your list";

 $index = input("Enter the index of the list/to-do to delete (Press 'X' to cancel it)");

 if ($index == "x" || $index == "X") {
  echo "Failed to delete your list";
 } else {
  RemoveTodoList((int)$index);
 }
}