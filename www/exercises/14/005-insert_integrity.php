<?php

$stmt = $db->prepare("INSERT INTO `classicmodels`.`orders`
(`orderDate`,
`requiredDate`,
`shippedDate`,
`status`,
`comments`,
`customerNumber`)
VALUES
('2019-03-13 15:09',
'2019-03-13 15:09',
'2019-03-13 15:09',
'Shipped',
'',
128);");
$stmt->execute();
$id = $db->lastInsertId(); // 10250

$cart = [
    [
        'productCode' => 123,
        'quantityOrdered' => 4,
        'priceEach' => 15
    ],
    [
        'productCode' => 135,
        'quantityOrdered' => 1,
        'priceEach' => 300
    ],
    [
        'productCode' => 456,
        'quantityOrdered' => 2,
        'priceEach' => 4
    ],
];

$linenumber = 1;
foreach ($cart as $cartitem) {
    /*
    $cartitem : 
    [
        'productCode' => 123,
        'quantityOrdered' => 4,
        'priceEach' => 15
    ],
    */


    $stmt = $db->prepare("INSERT INTO `classicmodels`.`orderdetails`
    (`orderNumber`,
    `productCode`,
    `quantityOrdered`,
    `priceEach`,
    `orderLineNumber`)
    VALUES
    (:orderNumber,
    :productCode,
    :quantityOrdered,
    :priceEach,
    :orderLineNumber);");
    $stmt->execute([
        ':orderNumber' => $id,
        ':productCode' => $cartitem['productCode'],
        ':quantityOrdered' => $cartitem['quantityOrdered'],
        ':priceEach' => $cartitem['priceEach'],
        ':orderLineNumber' => $linenumber
    ]);

    $linenumber++;
}
