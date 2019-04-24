<pre>
<?php


if (isset($_POST['submit'])) {
    //print_r($_FILES);
    $target_dir = 'images/';
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    $uploadOk = true;

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "Filen är en bild<br>";
        print_r($check);
        $uploadOk = true;
    } else {
        echo "Filen är inte en bild<br>";
        $uploadOk = false;
    }

    // Kolla om filen finns
    if (file_exists($target_file)) {
        echo "Tyvärr, filen finns redan<br>";
        $uploadOk = false;
    }

    // Kolla hur stor filen är
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Filen är tyvärr för stor<br>";
        $uploadOk = false;
    }

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
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Filen " . basename( $_FILES["fileToUpload"]["name"]) . " har bliviit uppladdad.";
            ?><br>
            <img src="<?php echo $target_file; ?>">
            <?php
        } else {
            echo "Tyvärr kunde vi inte ladda upp din fil";
        }
    }

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
    
<form method="post" enctype="multipart/form-data">
    Välj bild:<br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Ladda upp bild" name="submit">
</form>

</body>
</html>