<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management System</title>
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
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
        }
        input[type="number"], input[type="submit"], select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .receipt {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }
        .menu {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Order Management System</h1>
        <div class="menu">
            <h2>Menu</h2>
            <ul>
                <li>Halo-Halo - PHP 50</li>
                <li>Mais Con Yelo - PHP 40</li>
                <li>Saging Con Yelo - PHP 40</li>
                <li>Sago't Gulaman - PHP 20</li>
                <li>Buko Juice - PHP 20</li>
            </ul>
        </div>

        <form method="post" action="">
            <label for="item">Select Item:</label>
            <select id="item" name="item" required>
                <option value="50">Halo-Halo - PHP 50</option>
                <option value="40">Mais Con Yelo - PHP 40</option>
                <option value="40">Saging Con Yelo - PHP 40</option>
                <option value="20">Sago't Gulaman - PHP 20</option>
                <option value="20">Buko Juice - PHP 20</option>
            </select>

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>

            <label for="payment">Payment:</label>
            <input type="number" id="payment" name="payment" min="0" required>

            <input type="submit" value="Submit">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $item = (int)$_POST["item"];
                $quantity = (int)$_POST["quantity"];
                $payment = (int)$_POST["payment"];
                $total = $item * $quantity;
                $change = $payment - $total;

                echo "<div class='receipt'>";
                echo "<h2>Receipt</h2>";
                echo "<p>Item: " . htmlspecialchars($_POST["item"]) . "</p>";
                echo "<p>Quantity: $quantity</p>";
                echo "<p>Total: PHP $total</p>";
                echo "<p>Payment: PHP $payment</p>";
                echo $change >= 0 ? "<p>Change: PHP $change</p>" : "<p>Insufficient payment!</p>";
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>
