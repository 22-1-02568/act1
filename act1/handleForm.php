<?php
session_start();

date_default_timezone_set('Asia/Manila');

$prices = array(
    "Burger" => 50,
    "Fries" => 75,
    "Steak" => 150
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order = $_POST['order'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];

    $totalPrice = $prices[$order] * $quantity;
    $change = $cash - $totalPrice;

    $_SESSION['totalPrice'] = $totalPrice;
    $_SESSION['cash'] = $cash;
    $_SESSION['change'] = $change;
    $_SESSION['timestamp'] = date('m/d/Y h:i:s a');

    header('Location: receipt.php');
    exit();
}
?>