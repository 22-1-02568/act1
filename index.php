<?php
session_start();
// Check if both firstName and password are set
if (isset($_SESSION['firstName']) && isset($_SESSION['password'])) {
  // If 'loggedInOnce' is already set, this means the user has logged in before
  if (isset($_SESSION['loggedInOnce']) && $_SESSION['loggedInOnce'] === true) {
     $message = "User is already logged in.";
  } else {
     // Set 'loggedInOnce' to true after the first login
     $_SESSION['loggedInOnce'] = true;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Fill in the input fields below</h1>
  <h2>
     User logged in:
     <?php
     if (isset($_SESSION['firstName'])) {
        echo $_SESSION['firstName'];
     }
     ?>
  </h2>
  <h2>
     User password:
     <?php
     if (isset($_SESSION['password'])) {
        echo $_SESSION['password'];
     }
     ?>
  </h2>
  <h2>
     <?php
     // Display the message if the user has logged in twice
     if (isset($message)) {
        echo $message;
     }
     ?>
  </h2>
  <a href="unset.php">Logout</a>
  <form action="handleforms.php" method="POST">
     <p><input type="text" placeholder="First name here" name="firstName"></p>
     <p><input type="password" placeholder="Password here" name="password"></p>
     <p><input type="submit" value="Submit" name="submitBtn"></p>
  </form>
</body>
</html>
