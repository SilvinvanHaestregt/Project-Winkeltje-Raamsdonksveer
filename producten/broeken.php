<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/products.css">
    <?php require_once '../head.php'; ?>
</head>
<body>
    <header>
        <?php require_once '../header.php'; ?>
    </header>

    <main>
        <?php
            require_once '../backend/conn.php';
            $query = "SELECT * FROM products where CATEGORY = 2";
            $statement = $conn->prepare($query);
            $statement->execute();
            $products = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <div class="wrapper">
            <div class="table">
                <table>
                    <tr>
                        <th>Naam</th>
                        <th>Prijs</th>
                        <th>Beschrijving</th>
                        <th>Stock</th>
                        <th></th>
                    </tr>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?php echo $product['name'];?></td>
                            <td><?php echo $product['price'];?></td>
                            <td><?php echo $product['description'];?></td>
                            <td><?php echo $product['stock'];?></td>
                            <td><button type="button">Voeg toe</button></td>
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