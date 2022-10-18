<?php

/**
 * Data types
 * - String
 * - Integer
 * - Float
 * - Boolean
 * - Array
 * - Object
 * - NULL
 * - Resource
 */

$name = 'Bruno Bucciarati'; // String
$age = 20; // Integer
$isAlive = false; // Boolean :c

/**
 * true values are outputted as 1
 * false values are outputted as sanything
 */
echo $isAlive;

$cash = 20.75; // Float

/**
 * Single quotes can't interpolate variables
 */
echo '$name was $age years old';

/**
 * but doubles can
 */
echo "$name was $age years old";
echo "${name} was ${age} years old"; // Recommended way

echo  5 + 5; // 10
echo '5' + '5'; // 10, this is not JS, bro

/**
 * Defining contstans
 */

define('HOST', 'localhost');
echo HOST;
