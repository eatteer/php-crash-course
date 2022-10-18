<?php
$fruits = ['apple', 'orange', 'pear'];

// Get length
count($fruits);

// Search for existence of a specific element
in_array('apple', $fruits);

/**
 * Adding elements
 */

// Add one element to end
$fruits[] = 'grape';

// Add one or more elements to the end
array_push($fruits, 'blueberry', 'banana');

// Add one or more elements to the beginning
array_unshift($fruits, 'mango');

/**
 * Remove elements
 */

// Remove one element from the end
array_pop($fruits);

// Remove one element from the beginning
array_shift($fruits);

// Remove a specific element and it index
unset($fruits[1]);

/**
 * Slipt array in chunks
 */

/**
 * Slipt array into 2 chunks
 * Original array -> [1, 2, 3, 4, 5, 6, 7]
 * Chunked array -> [[1, 2], [3, 4], [5, 6], [7]]
 */
$chunkedArray = array_chunk($fruits, 2);

/**
 * Concatenate arrays
 */

// Concatenate two or more arrays
$first = [1, 2, 3];
$second = [4, 5, 6];
$combined = array_merge($first, $second);

// Spread array elements into another array
$combinedWithSpread = [...$first, ...$second];

$colors = ['green', 'red', 'yellow'];
$food = ['avocado', 'apple', 'banana'];

/**
 * Combine arrays as a hashmap
 */

/**
 * Use elements of an array as keys an elements of another array as values
 * $colors = ['green', 'red', 'yellow'];
 * $food = ['avocado', 'apple', 'banana'];
 * $foodAndColors = [
 *  'green' => 'avocado',
 *  'red' => 'apple',
 *  'yellow' => 'banana'
 * ]
 */
$foodAndColors = array_combine($colors, $food);

/**
 * Get keys of an array
 */
$keys = array_keys($foodAndColors);

/**
 * Flip an array
 * Exchange keys with their associated values
 * 
 * $foodAndColors = [
 *  'green' => 'avocado',
 *  'red' => 'apple',
 *  'yellow' => 'banana'
 * ]
 * 
 * $flipped = [
 *  'avocado' => 'green',
 *  'apple' => 'red',
 *  'banana' => 'yellow'
 * ]
 */
$flipped = array_flip($foodAndColors);

/**
 * Create array elements between a range
 */
$numbersFromRange = range(1, 10); // [1, 2, 3, 4, 5, 6, 7, 8, 9]

/**
 * Array map
 * Like map method of arrays in JS
 */
$mappedNumbers = array_map(function ($number) {
  return $number * 2;
}, $numbersFromRange);


/**
 * Array filter
 * Like filter method of arrays in JS
 */
$filteredArray = array_filter($numbersFromRange, fn ($number) => $number % 2 == 0);

/**
 * Array reduce
 * Like reduce method of arrays in JS
 */
$sum = array_reduce($numbersFromRange, fn ($carry, $number) => $carry + $number);
