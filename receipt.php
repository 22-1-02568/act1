<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item = (int)$_POST["item"];
    $quantity = (int)$_POST["quantity"];
    $payment = (int)$_POST["payment"];
    $total = $item * $quantity;
    $change = $payment - $total;

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Receipt</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
                margin: 0;
                padding: 0;
            }
            .container {
                max-width: 600px;
                margin: 20px auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h2 {
                text-align: center;
                color: #333;
            }
            p {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Receipt</h2>
            <p>Item: <?php echo htmlspecialchars($_POST["item"]); ?></p>
            <p>Quantity: <?php echo $quantity; ?></p>
            <p>Total: PHP <?php echo $total; ?></p>
            <p>Payment: PHP <?php echo $payment; ?></p>
            <?php if ($change >= 0): ?>
                <p>Change: PHP <?php echo $change; ?></p>
            <?php else: ?>
                <p style="color: red;">Insufficient payment!</p>
            <?php endif; ?>
        </div>
    </body>
    </html>
    <?php
} else {
    header("Location: order.php");
    exit();
}
