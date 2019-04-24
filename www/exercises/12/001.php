<pre>
<?php

$host = 'localhost';
$db   = 'classicmodels';
$user = 'root';
$pass = 'root';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
     $pdo = new PDO($dsn, $user, $pass);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if (isset($_POST['action'])) {
    $username = "Bobby';DROP TABLE users; -- ";

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_MAGIC_QUOTES);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_MAGIC_QUOTES);

    $query = "SELECT * FROM users WHERE user = ? AND password = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$user, $password]);

    $query = "SELECT * FROM users WHERE (email = :user OR user = :user) AND password = :pass";
    $stmt = $pdo->prepare($query);
    $stmt->execute([':user' => $user, ':pass' => $password]);

    $query = "SELECT * FROM products WHERE id = :product_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':product_id', $product_id, PDO::PARAM_INT);
    $stmt->execute();



//    $stmt->execute(['productLine' => $product_line]);
   

    echo $query;

//    $query = "INSERT INTO users SET name='Sarah O'Hara'";
}

?>
</pre>
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