<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];

// Hash the password using SHA1
$password = sha1($password);

require_once 'conn.php';
$query = "SELECT * FROM users WHERE username = :username AND name = :name and email = :email";
$statement = $conn->prepare($query);
$statement->execute([":username" => $username, ":name" => $name, ":email" => $email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

function checkLogin($user, $username, $password, $name, $email) {
    if($user) {
        if($user['password'] == $password && $user['username'] == $username && $user['name'] == $name && $user['email'] == $email) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: ../index.php");
        } else {
            $_SESSION['error'] = 'Combinatie klopt niet';
            header("Location: ../login.php");
        }
    } else {
        $_SESSION['error'] = 'Combinatie klopt niet';
        header("Location: ../login.php");
    }
}

checkLogin($user, $username, $password, $name, $email);

?>