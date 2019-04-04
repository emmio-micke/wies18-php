<?php // session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cookies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="002-main.js"></script>
</head>
<body>
    <h3>Cookies</h3>
    <pre>
    <?php print_r($_COOKIE); ?>
    <?php
        if (isset($_COOKIE['foo'])) {
            echo '<h4>Foo</h4>';
            var_dump($_COOKIE['foo']);
        }
    ?>
    </pre>
    <button id="btnSetCookie">Set cookie</button>
    <button id="btnSetCookieArray">Set cookie array</button>
    <button id="btnShowCookies">Show cookies</button>
    <button id="btnDeleteCookie">Delete cookie (foo)</button>
</body>
</html>