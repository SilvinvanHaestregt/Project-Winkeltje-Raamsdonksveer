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
            $order_number = 1;
            $status = 1;
            $producten = "Broek, schoenen, t-shirt";
            $email_recipient = "silvinvanhaestregt@outlook.com";
            
            //1. Verbinden met de database
            require_once 'backend/conn.php';
            
            //2. Query
            $query = "INSERT INTO orders (order_number, status, producten, email_recipient)
            VALUES(:order_number, :status, :producten, :email_recipient)";
            
            //3. Prepare
            $statement = $conn->prepare($query);
            
            //4. Execute
            $statement->execute([
                ":order_number" => $order_number,
                ":status" => $status,
                ":producten" => $producten,
                ":email_recipient" => $email_recipient
            ]);
            
            $items = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>
    </main>
    <footer>
        <?php require_once 'footer.php'; ?>
    </footer>
    <?php require_once 'script.php'; ?>
</body>