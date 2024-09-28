<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm_Act1</title>
</head>
<body>
    <?php
    session_start();
    $error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
    $message = isset($_SESSION['message']) ? $_SESSION['message'] : '';

    unset($_SESSION['error']);
    unset($_SESSION['message']);
    ?>

    <form action="handleForm.php" method="post">
        <p><h3>Username: <input type="text" placeholder="First name here" name="username"></h3></p>
        <p><h3>Password: <input type="password" placeholder="Password here" name="password"></h3></p>
        <p><input type="submit" value="Login" name="login"></p>
        <p><input type="submit" value="Logout" name="logout"></p>
    </form>

    <?php
    if (!empty($error)) {
        echo "<p style='color:red;'>$error</p>";
    }

    if (!empty($message)) {
        echo "<p style='color:blue;'>$message</p>";
    }

    if (isset($_SESSION['username'])) {
        echo "<h2>User logged in: " . $_SESSION['username'] . "</h2>";
        echo "<h2>Password: " . $_SESSION['password'] . "</h2>";
    }
    ?>
</body>
</html>