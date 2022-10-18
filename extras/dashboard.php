<?php
session_start();
$isAuthenticated = isset($_SESSION['username']);

// Short circuit evaluation
// If user is authenticated then create username variable
$isAuthenticated && $username = $_SESSION['username'];
?>

<?php if (!$isAuthenticated) : ?>
  <h2>Unauthenticated</h2>
<?php endif; ?>

<?php if ($isAuthenticated) : ?>
  <a href="./logout.php">Logout</a>
  <h2>Welcome <?php echo $username; ?></h2>
<?php endif; ?>

<a href="../sessions.php">Back to login</a>