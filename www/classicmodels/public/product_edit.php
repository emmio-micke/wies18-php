<?php

// Inkludera databasen som en egen fil.
require 'incl/db.php';

// Kolla om någon specifik produkt är satt, ta en standardprodukt annars.
if (isset($_GET['product'])) {
    $product_no = filter_input(INPUT_GET, 'product', FILTER_SANITIZE_ENCODED);
} else {
    $product_no = 'S12_1099';
}

// Användaren vill spara fälten.
if (isset($_POST['action'])) {
    // Kontrollera om användaren har skickat en bild.
    $target_dir = 'images/';
    $target_file = $target_dir . basename($_FILES["productImage"]["name"]);

    $uploadOk = true;

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["productImage"]["tmp_name"]);
    $uploadOk = ($check !== false);

    // Tillåt bara vissa filtyper
    if ($imageFileType != 'jpg' &&
            $imageFileType != 'png' && 
            $imageFileType != 'jpeg' && 
            $imageFileType != 'gif') {
        echo "Vi tillåter bara bildfiler<br>";
        $uploadOk = false;
    }

    // Om bilden är okej kan vi flytta den till vår images-mapp
    if ($uploadOk) {
        if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file)) {
            $productImage = $target_file;
        } else {
            $productImage = '';
        }
    }


    $stmt = $pdo->prepare("UPDATE classicmodels.products SET 
            productName = :productName,
            productDescription = :productDescription,
            productImage = :productImage
        WHERE productCode = :productCode;");

    $stmt->execute([
        ':productName' => filter_input(INPUT_POST, 'productName', FILTER_SANITIZE_STRING),
        ':productDescription' => filter_input(INPUT_POST, 'productDescription', FILTER_SANITIZE_STRING),
        ':productImage' => $productImage,
        ':productCode' => filter_input(INPUT_POST, 'productCode', FILTER_SANITIZE_STRING),
    ]);

    echo "Sparat!";
}

// Hämta ut uppgifterna för den valda produkten.
$stmt = $pdo->prepare("SELECT * FROM classicmodels.products WHERE productCode = :product_code;");

// Byt ut :product_code mot den produktkod vi valde ovan och kör frågan.
$stmt->execute([
    ':product_code' => $product_no
]);

$product = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Resultatet kommer att vara en array men eftersom vi bara söker ut en produkt
// så väljer vi ut det första resultatet.
$product = $product[0];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Classic models</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <h1>Redigera produkt</h1>
        <table>
            <tr>
                <th>Produktnamn</th>
                <td><input type="text" name="productName" value="<?php echo $product['productName']; ?>"></td>
            </tr>
            <tr>
                <th>Produktbeskrivning</th>
                <td><textarea name="productDescription"><?php echo $product['productDescription']; ?></textarea></td>
            </tr>
            <tr>
                <th>Bild</th>
                <td>
                    <?php if (!empty($product['productImage'])): ?>
                        <img src="<?php echo $product['productImage']; ?>"><br>
                        Ersätt med ny bild:
                    <?php else: ?>
                        Ladda upp en bild:
                    <?php endif; ?>
                    <input type="file" name="productImage">
                </td>
            </tr>
        </table>
        <input type="hidden" name="productCode" value="<?php echo $product['productCode']; ?>">
        <input type="submit" name="action" value="Spara">
    </form>
</body>
</html>