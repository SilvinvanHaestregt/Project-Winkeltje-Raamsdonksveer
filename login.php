<?php
    session_start();
?>



<form action="backend/loginController.php" method="post">
    <label for="username">gebruikersnaam:</label>
    <input type="text" name="username" id="username">
    <label for="password">wachtwoord:</label>
    <input type="password" name="password" id="password">
    <label for="name">Naam:</label>
    <input type="name" name="name" id="name">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <input type="submit" value="Submit">
</form>