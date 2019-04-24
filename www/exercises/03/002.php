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
<?php

    $search_html = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);
    $search_url = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_ENCODED);
    echo "You have searched for $search_html.\n";
    echo "<a href='?search=$search_url'>Search again.</a>";
?>

</body>
</html>