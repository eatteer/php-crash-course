<?php
$password = '123';

/**
 * Normal function
 * This is like function declarations in JS
 * - Functions have their own scope
 * - Arguments can have a default value
 */
function registerUser($email = 'unknown')
{
  $username = 'debviluke';
  // $password cannot be called outside the script scope unless global keyword is used
  global $password;
  echo "$username registered with email: $email and password: $password";
}

// $username cannot be called outside the function scope
registerUser('eatteer@gmail.com');

/**
 * Anonymous functions
 * This is like function expressions in JS
 * - Can be stored in variables
 */

$sum = function ($a, $b) {
  return $a + $b;
};

/**
 * Arrow function
 */
$multiply = fn ($a, $b) => $a * $b;
