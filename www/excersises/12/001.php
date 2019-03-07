<?php

if (isset($_POST['action'])) {
    $username = "Bobby';DROP TABLE users; -- ";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE user='$name' AND password = '$password'";
    $query = "SELECT * FROM users WHERE user='$name' AND password = 'Bobby';DROP TABLE users; -- '";

    $query = "INSERT INTO users SET name='Sarah O'Hara'";
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <form method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" name="action" value="Logga in">
    </form>
</body>
</html>