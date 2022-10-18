<?php
function inverse($number)
{
  if ($number == 0) {
    throw new Exception('Division by zero');
  }
  return 1 / $number;
}

try {
  echo inverse(10);
  echo inverse(0); // Throws an exception
} catch (Exception $exception) {
  echo 'Caught exception: ', $exception->getMessage();
} finally {
  echo 'Finally';
}
