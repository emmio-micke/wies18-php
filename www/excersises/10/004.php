<?php

$host  = '127.0.0.1';
$db    = 'classicmodels';
$port  = '8889';
$user  = 'root';
$pass  = 'root';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// List product lines.
$stmt = $pdo->query("SELECT DISTINCT productLine FROM products ORDER BY productLine;");

while ($row = $stmt->fetch()) {
    ?>
    <a href="?product_line=<?php echo $row['productLine']; ?>"><?php echo $row['productLine']; ?></a><br>
    <?php
}

?><hr><?php

// List products from a specific product line.
if (isset($_GET['product_line'])) {
    $product_line = filter_input(INPUT_GET, 'product_line', FILTER_SANITIZE_STRING);

    $stmt = $pdo->query("SELECT * FROM products WHERE productLine = '$product_line';");

    while ($row = $stmt->fetch()) {
        ?>
        <a href="001.php?product=<?php echo $row['productCode']; ?>"><?php echo $row['productName']; ?></a> - <?php echo $row['productLine']; ?><br>
        <?php
    }
} else {
    echo "Välj en kategori.<br>";
}

