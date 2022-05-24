<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/main.css">
    <?php require_once '../head.php'; ?>
</head>
<body>
    <header>
        <?php require_once '../header.php'; ?>
    </header>

    <main>
        <?php
            require_once '../backend/conn.php';
            $query = "SELECT * FROM products";
            $statement = $conn->prepare($query);
            $statement->execute();
            $products = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <table>
            <tr>
                
            </tr>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product['id'];?></td>
                </tr>
            <?php endforeach; ?>
        </table>
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
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?php echo $product[''];?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </main>

    <footer>
        <?php require_once '../footer.php'; ?>
    </footer>
</body>