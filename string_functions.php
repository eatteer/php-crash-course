<?php
$string = 'Hello world';

// Get the lenght of a string
$stringLength = strlen($string);

// Get the position of the first ocurrence of a substring
$indexFirstOcurrence = strpos($string, 'o');

// Get the position of the last ocurrence of a substring
$indexLastOcurrence = strrpos($string, 'o');

// Reverse a string
$reversedString = strrev($string);

// Convert string to lowercase
$lowerCaseString = strtolower($string);

// Convert string to uppercase
$uppercaseString = strtoupper($string);

// Uppercase de first character of each word
$uppercaseStringWords = ucwords($string);

// Replace substring
$replacedString = str_replace('World', 'Everyone', $string);

// Return substring specifying the index and the number of characters
$helloSubstring = substr($string, 0, 4); // Hello
$worldSubstring = substr($string, 6); // World

// Evaluate if a string starts with
$doesStart = str_starts_with($string, 'Hell'); // true

// Evaluate if a string ends with
$doesEnd = str_ends_with($string, 'D'); // false

/**
 * HTML Special chars
 * Avoid the client to parse HTML tags
 */

$scriptThatShouldntRun = '<script>alert(Attack)</script>';
echo htmlspecialchars($scriptThatShouldntRun);

// Print format (Associate variables)
// Associate strings
printf('%s likes %s', 'Juan', 'MT'); // Juan likes MT

// Associate floats
printf('1 + 1 = %f', 1 + 1); // 2.000000