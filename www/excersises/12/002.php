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
<h1>Hello world!</h1>
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

/*
PDO::FETCH_NUM
PDO::FETCH_ASSOC
PDO::FETCH_BOTH
PDO::FETCH_OBJ
PDO::FETCH_LAZY
PDO::FETCH_CLASS, 'Customers'
class Customers {}
*/


$customers = $pdo->query('SELECT * FROM customers')->fetchAll(PDO::FETCH_ASSOC);

print_r($customers);


?>
</pre>
</body>
</html>