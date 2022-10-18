<?php

/**
 * Functions to sanitize
 * htmlspecialchars(inputValue)
 * filter_input(inputType, inputName, sanitizeFilter)
 * filter_var(inputValue, sanitizeFilter)
 */
if (isset($_POST['submit'])) {
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
  echo "<p>Name: $name</p>";
  echo "<p>Age: $age</p>";
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Juan&age=21">Navigate</a>

<?php
/**
 * form.method = GET (By default)
 * $_GET can store url and form data
 * $_POST can store form data
 */
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <h2>Form</h2>
  <input type="text" name="name" placeholder="Name">
  <input type="number" name="age" placeholder="Age">
  <input type="submit" name="submit" value="Submit">
</form>