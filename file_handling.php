<?php
$file = './extras/users.txt';
$fileExists = file_exists($file);

/**
 * If file does not exists then create it
 */
if (!$fileExists) {
  $filePointer = fopen($file, 'w');

  $users = [
    'Brad',
    'John',
    'Sara',
    'Steve',
    'Harry'
  ];

  $content = "";

  foreach ($users as $user) {
    $content .= $user . PHP_EOL;
  }

  fwrite($filePointer, $content);
  fclose($filePointer);
  echo $content;
}

/**
 * If file exists then render the content
 */
if ($fileExists) {
  // $content = readfile($file);
  $filePointer = fopen($file, 'r');
  $content = fread($filePointer, filesize($file));
  fclose($filePointer);
  echo $content;
}
