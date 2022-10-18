<?php

/**
 * Sessions allows to store information in the server
 */

$submittedLogin = isset($_POST['login']);

if ($submittedLogin) {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  $credentialsValidation = $username == 'debviluke' && $password == 'lovewony';

  // Valid credentials
  if ($credentialsValidation) {
    session_start();
    $_SESSION['username'] = $username;
    $redirectionPage = './extras/dashboard.php';
    header("Location: $redirectionPage");
  }
}
?>

<!-- Submitted login and invalid credentials -->
<?php if ($submittedLogin && !$credentialsValidation) : ?>
  <p>Invalid credentials</p>
<?php endif; ?>

<form method="POST">
  <h2>Login</h2>
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <input type="submit" name="login" value="Submit">
</form>

<a href="./extras/dashboard.php">Dashboard</a>