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

$sql = "SELECT productLine, productCode, productName FROM products ";

$orders  = ["productName","productCode","qty"]; //field names
$key     = array_search($_GET['sort'] ?? null, $orders); // see if we have such a name
$orderby = $orders[$key]; //if not, first one will be set automatically. smart enuf :)

if (isset($_GET['productLine'])) {
    $sql .= " WHERE productLine = '" . filter_input(INPUT_GET, 'productLine', FILTER_SANITIZE_STRING) . "' ";
}

$sql .= " ORDER BY $orderby ";

$data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($data);


?>
</pre>
</body>
</html>