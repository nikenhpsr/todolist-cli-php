<?php

function AddTodoList($todo) {
  global $todoList;

  array_push($todoList, $todo);
}