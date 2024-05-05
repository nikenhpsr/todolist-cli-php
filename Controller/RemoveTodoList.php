<?php

function removeTodoList(int $index): bool
{
  global $todoList;

  if ($index >= sizeof($todoList)) {
    return false;
  }

  for ($i = $index; $i < sizeof($todoList) - 1; $i++) {
    $todoList[$i] = $todoList[$i + 1];
  }

  unset($todoList[sizeof($todoList) - 1]);
  return true;
}