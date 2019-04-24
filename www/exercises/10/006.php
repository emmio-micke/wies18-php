<?php

if (isset($_POST["action"])) {
    $heap = filter_input(INPUT_POST, 'heap', FILTER_SANITIZE_NUMBER_INT);
    $player = filter_input(INPUT_POST, 'player', FILTER_SANITIZE_NUMBER_INT);
    $sticks = filter_input(INPUT_POST, 'sticks', FILTER_SANITIZE_NUMBER_INT);

    if ($sticks >= 1 && $sticks <= 3) {
        $heap -= $sticks;

        if ($heap <= 0) {
            echo "Spelare $player tog sista pinnen.<br>";
        }
    
        $player = ($player == 1) ? 2 : 1;
    } else {
        echo "Spelare $player tog fel antal stickor, försök igen.<br>";
    }


} else {
    $heap = 21;
    $player = 1;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nim</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <th>Heap</th>
                <td><?php echo $heap; ?></td>
            </tr>

            <tr>
                <th>Player</th>
                <td>Player <?php echo $player; ?></td>
            </tr>

            <tr>
                <th>Sticks</th>
                <td><input type="number" min="1" max="3" name="sticks" value="1"></td>
            </tr>

            <tr>
                <th></th>
                <td><input type="submit" name="action" value="Skicka"></td>
            </tr>
        </table>
        <input type="hidden" name="player" value="<?php echo $player; ?>">
        <input type="hidden" name="heap" value="<?php echo $heap; ?>">
    </form>
</body>
</html>