<?php
    session_start();
?>

<?php require_once 'head.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <!-- <?php require_once 'header.php'; ?> -->
    </header>
    <main>
        <div class="form">
            <form action="backend/loginController.php" method="post">
                <div class="form-group">
                    <label for="username">gebruikersnaam:</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="password">wachtwoord:</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="name">Naam:</label>
                    <input type="name" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="email">email:</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </main>
    <footer>
        <?php require_once 'footer.php'; ?>
    </footer>
</body>
</html>