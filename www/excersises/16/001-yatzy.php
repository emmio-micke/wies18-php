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
<?php

class Yatzy {
}

class Fields {
    public $name;
    public $field_name;

    public function __construct($name) {
        $this->name = $name;
        $name = strtolower($name);
        $name = str_replace(' ', '_', $name);
        $name = str_replace('å', 'a', $name);
        $name = str_replace('ä', 'a', $name);
        $name = str_replace('ö', 'o', $name);
        $this->field_name = $name;
    }
}

$fields = [
    'numbers' => [
        new Fields('Ettor'),
        new Fields('Tvåor'), 
        new Fields('Treor'), 
        new Fields('Fyror'), 
        new Fields('Femmor'), 
        new Fields('Sexor)')
    ],
    'other' => [
        new Fields('Par'), 
        new Fields('Tvåpar'), 
        new Fields('Triss'), 
        new Fields('Fyrtal'), 
        new Fields('Kåk'), 
        new Fields('Liten stege'), 
        new Fields('Stor stege'), 
        new Fields('Chans'), 
        new Fields('Yatzy')
    ]
];

define('NO_OF_PLAYERS', 4);
$players = [];

for ($i = 1; $i <= NO_OF_PLAYERS; $i++) {
    $players[] = [
        'name' => "Player $i",
        'field' => "player$i"
    ];
}

?>

<table>
    <tr>
        <td></td>
        <?php foreach($players as $player): ?>
        <th><?php echo $player['name']; ?></th>
        <?php endforeach; ?>
    </tr>

    <?php foreach ($fields['numbers'] as $field): ?>
    <tr>
        <th><?php echo $field->name; ?></th>
        <?php foreach($players as $player): ?>
            <td><input type="text" name="<?php echo $player['field'] . '_' . $field->field_name; ?>" id="<?php echo $player['field'] . '_' . $field->field_name; ?>" value=""></td>
        <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>