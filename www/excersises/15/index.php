<?php

// Om querystringen har en remove-variabel satt så ska vi ta bort den produkten
if (isset($_GET['remove'])) {
    $product_id = filter_input(INPUT_GET, 'remove', FILTER_SANITIZE_NUMBER_INT);

    $sql = "DELETE FROM products WHERE product_id = :product_id";
//    $sth->bindValue(':product_id', $product_id, PDO::PARAM_INT);
    echo $sql . '<br>';
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hello</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>Products</h1>
    <?php
        /*
        $objProduct = new Product();
        $products = $objProduct->getAllProducts();
        */

        $products = [
            [
                'product_id' => 13,
                'product_name' => 'Energidryck',
                'price' => 15
            ],
            [
                'product_id' => 15,
                'product_name' => 'Pepsi Max',
                'price' => 13
            ],
        ];

        foreach($products as $product):
            ?>
            <div class="product">
                <strong><?php echo $product['product_name']; ?></strong><br>
                <a href="?remove=<?php echo $product['product_id']; ?>">Ta bort</a>
            </div>
        <?php
        endforeach;
    ?>
</body>
</html>
