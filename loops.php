<?php

/**
 * For
 */
for ($i = 0; $i < 10; $i++) {
  echo $i;
}

/**
 * While
 */
$j = 0;
while ($j < 10) {
  echo $j;
  $j++;
}

/**
 * Do while
 */
$k = 0;
do {
  echo $k;
  $k++;
} while ($k < 10);


/**
 * For each
 */
$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $number) {
  echo $number;
}

/**
 * For each with indexes or keys
 */
$names = ['Juan', 'Kevin', 'Dilan'];
foreach ($names as $index => $name) {
  echo "names[$index] = $name";
}
