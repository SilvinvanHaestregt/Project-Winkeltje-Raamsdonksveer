<?php

session_start();

if(!isset($_SESSION['user_id'])){

    $msg = "Je moet eerst inloggen!";
    header("Location: login.php?msg=$msg");
    session_destroy();
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <?php require_once 'head.php'; ?>
</head>
<body>
    <header>
        <?php require_once 'header.php'; ?>
    </header>

    <main>

        <?php
            require_once 'backend/conn.php';
            $query = "SELECT * FROM orders";
            $statement = $conn->prepare($query);
            $statement->execute();
            $orders = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <div class="wrapper">
            <div class="table">
                <table>
                    <tr>
                        <th>Order ID</th>
                        <th>Order Nummer</th>
                        <th>Order Status</th>
                        <th>Producten</th>
                        <th>Besteller</th>
                    </tr>
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?php echo $order['id'];?></td>
                            <td><?php echo $order['order_number'];?></td>
                            <td><?php echo $order['status'];?></td>
                            <td><?php echo $order['producten'];?></td>
                            <td><?php echo $order['email_recipient'];?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </main>

    <footer>
        <?php require_once 'footer.php'; ?>
    </footer>
</body>
</html>