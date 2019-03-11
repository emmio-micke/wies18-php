<pre>
<?php

if (isset($_POST['action'])) {
    print_r($_POST['remove']);
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
        Välj vilka produkter du vill ta bort:<br>
        <input type="checkbox" name="remove[]" value="1"> Produkt med id 1<br>
        <input type="checkbox" name="remove[]" value="2"> Produkt med id 2<br>
        <input type="checkbox" name="remove[]" value="3"> Produkt med id 3<br>
        <input type="checkbox" name="remove[]" value="4"> Produkt med id 4<br>
        <input type="checkbox" name="remove[]" value="5"> Produkt med id 5<br>
        <input type="submit" name="action" value="Ta bort">
    </form>
</body>
</html>