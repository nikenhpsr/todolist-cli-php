<?php

function input(string $list): string
{
  echo "list: ";
  $result = fgets(STDIN);
  return trim($result);
}
