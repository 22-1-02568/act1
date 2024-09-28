<?php
session_start();
$error = '';
$message = '';

if (isset($_POST['login'])) {
    if (isset($_SESSION['username'])) {
        $message = $_SESSION['username'] . ' is already logged in. Wait for them to log out first.';
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            $error = 'Please fill in both fields.';
        } else {
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            $_SESSION['username'] = $username;
            $_SESSION['password'] = $hashed_password;
        }
    }
    $_SESSION['error'] = $error;
    $_SESSION['message'] = $message;
    header('Location: index.php');
    exit();
}

if (isset($_POST['logout'])) {
    header('Location: unset.php');
    exit();
}
?>