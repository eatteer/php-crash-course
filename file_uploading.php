<?php
$allowedExtensions = ['png', 'jpg', 'jpeg', 'gif'];
$wasSubmitted = isset($_POST['submit']);
if ($wasSubmitted) {
  $file = $_FILES['file'];

  // Destructure file information
  [
    'name' => $name,
    'size' => $size,
    'tmp_name' => $temporaryPath
  ] = $file;

  /**
   * Extract the file extension by exploding
   * the file name and getting the last element
   */
  $explodedName = explode('.', $name);
  $extension = strtolower(end($explodedName));

  // Check for valid extension
  $isValidExtension = in_array($extension, $allowedExtensions);
  if ($isValidExtension) {
    // Declare path where the file will be saved
    $storagePath = "./uploads/$name";

    // Move file from temp path to permanent path
    move_uploaded_file($temporaryPath, $storagePath);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File uploading</title>
</head>

<body>
  <!-- Form was submitted -->
  <?php if ($wasSubmitted) : ?>

    <!-- Selected file has an invalid extension -->
    <?php if (!$isValidExtension) : ?>
      <h2>Invalid file type</h2>
    <?php endif; ?>

    <!-- Selected file has a valid extension -->
    <?php if ($isValidExtension) : ?>
      <h2>File sucessfully uploaded</h2>
    <?php endif; ?>

  <?php endif; ?>

  <form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>

</html>