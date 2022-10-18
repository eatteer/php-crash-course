<?php

/**
 * Logical operators
 * < Less than
 * > Greater than
 * <= Less than or equal to
 * >= Greater than or equal to
 * == Equal to
 * === Identical to
 * != Not equal to
 * !== Not identical to
 */


/**
 * If statement
 */
$age = 20;
if ($age >= 18) {
  echo 'You are old enough to vote';
} else {
  echo 'You are not old enough to vote';
}

$numbers = [1];
if (empty($numbers)) {
  echo 'Array is empty';
} else {
  echo 'Array is not empty';
}

/**
 * Ternary operator
 */
$message = empty($numbers) ? 'Array is empty' : 'Array is not empty';

/**
 * Coalescing operator
 */
$first = $numbers[0] ?? null;

/**
 * Switch
 */
$favColor = 'violet';
switch ($favColor) {
  case 'violet':
    echo 'I love it too';
    break;

  default:
    echo 'I do not not that color';
    break;
}
