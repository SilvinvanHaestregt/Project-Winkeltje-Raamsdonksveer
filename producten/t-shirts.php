<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <?php require_once 'head.php'; ?>
</head>
<body>
    <header>
        <?php require_once 'header.php'; ?>
    </header>

    <main>
        <?php
            require_once 'backend/conn.php';
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
    </main>

    <footer>
        <?php require_once 'footer.php'; ?>
    </footer>
</body>