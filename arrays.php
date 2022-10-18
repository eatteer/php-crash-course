<?php

/**
 * Simple array
 */
$numbers = [1, 2, 3];
$fruits = array('apple', 'orange', 'another apple');
print_r($numbers);
echo $numbers[2]; // another apple 

/**
 * Associative array
 * Works like an literal object in JS
 * or a dictionary in Python
 */
$bruno = [
  'name' => 'Bruno',
  'standName' => 'Sticky Fingers'
];

echo "${bruno['name']} owns ${bruno['standName']}";

/**
 * Multidimensional array
 * Basically arrays inside arrays
 */
$brunos = [
  [
    'name' => 'Bruno',
    'standName' => 'Sticky Fingers'
  ],
  [
    'name' => 'Bruno',
    'standName' => 'Sticky Fingers'
  ]
];

echo $brunos[1]['name'];

/**
 * Encode array to JSON
 */
echo json_encode($brunos);
