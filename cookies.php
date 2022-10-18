<?php

/**
 * Cookies allows to save information in the client browser
 * - Cookies are sent to the server on each request
 */

// Cookie validity period (One day in seconds)
$validityPeriod = 86400;

/**
 * Save user name in cookie
 */
if (isset($_POST['setCookie'])) {
  $currentTimestamp = time();
  $expirationDate = $currentTimestamp + $validityPeriod;
  setcookie('name', 'Juan', $expirationDate);
}

/**
 * Remove user name from cookie
 */
if (isset($_POST['unsetCookie'])) {
  $currentTimestamp = time();
  $expirationDate = $currentTimestamp - $validityPeriod;
  setcookie('name', null, $expirationDate);
}
?>

<h1>Cookie form</h1>

<form method="POST">
  <input type="submit" name="setCookie" value="Set cookie">
</form>

<form method="POST">
  <input type="submit" name="unsetCookie" value="Unset cookie">
</form>