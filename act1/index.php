<?php
session_start();

$prices = array(
    "Burger" => 50,
    "Fries" => 75,
    "Steak" => 150
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
        }
        form {
            max-width: 300px; 
        }
        .form-table {
            width: 100%;
        }
        .form-table td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Menu</h1>
    <table>
        <tr>
            <th>Order</th>
            <th>Amount</th>
        </tr>
        <?php foreach ($prices as $item => $price): ?>
        <tr>
            <td><?php echo $item; ?></td>
            <td><?php echo $price; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <form action="handleForm.php" method="post">
        <table class="form-table">
            <tr>
                <td><label for="order">Select an order</label></td>
                <td><select name="order" id="order">
                    <?php foreach ($prices as $item => $price): ?>
                    <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
                    <?php endforeach; ?>
                </select></td>
            </tr>
            <tr>
                <td><label for="quantity">Quantity</label></td>
                <td><input type="number" name="quantity" id="quantity" value="1" min="1"></td>
            </tr>
            <tr>
                <td><label for="cash">Cash</label></td>
                <td><input type="number" name="cash" id="cash" min="0"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>