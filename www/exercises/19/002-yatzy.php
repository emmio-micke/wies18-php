<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Yatzy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main2.js"></script>
</head>
<body>
    <table>
        <?php

        $fields = [
            [
                'name' => 'Ettor',
                'field_name' => 'ones'
            ],
            [
                'name' => 'Tvåor',
                'field_name' => 'twos'
            ],
            [
                'name' => 'Treor',
                'field_name' => 'threes'
            ],
            [
                'name' => 'Fyror',
                'field_name' => 'fours'
            ],
            [
                'name' => 'Femmor',
                'field_name' => 'fives'
            ],
            [
                'name' => 'Sexor',
                'field_name' => 'sixes'
            ]
        ];

        $players = [
            [
                'name' => 'Micke',
                'field_name' => 'player1'
            ],
            [
                'name' => 'Player 2',
                'field_name' => 'player2'
            ],
            [
                'name' => 'Player 3',
                'field_name' => 'player3'
            ],
            [
                'name' => 'Player 4',
                'field_name' => 'player4'
            ]
        ];

        $noOfPlayers = count($players);

        ?>
        <input type="hidden" id="noOfPlayers" value="<?php echo $noOfPlayers; ?>">
        <tr>
            <th></th>
            <?php foreach($players as $player): ?>
                <th><?php echo $player['name']; ?></th>
            <?php endforeach; ?>
        </tr>

        <?php foreach($fields as $field): ?>
            <tr>
                <td><?php echo $field['name']; ?></td>
    
                <?php foreach($players as $player): ?>
                    <td><input type="number" id="<?php echo $player['field_name']; ?>_<?php echo $field['field_name']; ?>" value="0"></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>

        <tr>
            <td>Summa</td>

            <?php foreach($players as $player): ?>
                <td id="<?php echo $player['field_name']; ?>_sum"></td>
            <?php endforeach; ?>
        </tr>

        <tr>
            <td>Bonus</td>

            <?php foreach($players as $player): ?>
                <td id="<?php echo $player['field_name']; ?>_bonus"></td>
            <?php endforeach; ?>
        </tr>

    </table>

    <button id="calc">Beräkna</button>
</body>
</html>