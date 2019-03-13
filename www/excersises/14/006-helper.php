<?php

class Helper {
    public function select($options, $name, $selected) {
        ?>
        <select name="<?php echo $name; ?>">
        <?php
            foreach($options as $key => $value) {
                $sel = ($key == $selected) ? 'selected' : '';
                ?>
                <option value="<?php echo $key; ?>" <?php echo $sel; ?>><?php echo $value; ?></option>
                <?php
            }
        ?>
        </select>
        <?php
    }
}

$helper = new Helper();

$options = [
    'blue' => 'Blå',
    'red' => 'Röd',
    'yellow' => 'Gul'
];

echo $helper->select($options, 'favourite_color', 'red');
