<?php

session_start();

include "classes/db.php";
include "classes/user.php";



if (isset($_POST['register'])) {
    $username = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_MAGIC_QUOTES);
    $password = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_MAGIC_QUOTES);

    $user = new User();

    if ($user->register($username, $password)) {
        header('Location: 008.php');
        exit;
    } else {
        echo "Couldn't register user<br>";
    }
}

?>
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
<h1>Registrera</h1>

<?php if (isset($_SESSION['logged_in'])): ?>
Välkommen <strong><?php echo $_SESSION['name']; ?></strong>!<br>
<?php else: ?>
<form method="post">
    User:<br>
    <input type="text" name="user"><br>
    Pass:<br>
    <input type="password" name="pass"><br>
    <input type="submit" name="register" value="Register">
</form>
<?php endif; ?>
</body>
</html>