<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Receipt</title>
</head>
<body>
    <h1>RECEIPT</h1>
    <p>Total Price: <?php echo $_SESSION['totalPrice']; ?></p>
    <p>You Paid: <?php echo $_SESSION['cash']; ?></p>
    <p>CHANGE: <?php echo $_SESSION['change']; ?></p>
    <p><?php echo $_SESSION['timestamp']; ?></p>
    <form action="index.php" method="get">
        <input type="submit" value="Next Order">
    </form>
</body>
</html>