<?php

class Vehicle {
    public $id, $model, $price, $color;

    public function __construct($id, $model, $price, $color) {
        $this->id = $id;
        $this->model = $model;
        $this->price = $price;
        $this->color = $color;
    }
}

$data = [];

$vehicle1 = new Vehicle(1, "Ford", 1000000, "red");
$vehicle2 = new Vehicle(2, "Volvo", 800000, "grey");
$vehicle3 = new Vehicle(3, "Audi", 1200000, "blue");

$data[] = $vehicle1;
$data[] = $vehicle2;
$data[] = $vehicle3;

//print_r($data);
$json_data = json_encode($data);


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JSON</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="001-main.js"></script>
</head>
<body>
    <div id="vehicle_1" class="vehicle">Ford</div>
    <div id="vehicle_2" class="vehicle">Volvo</div>
    <div id="vehicle_3" class="vehicle">Audi</div>
    <textarea id="vehicle_data" style="display: none;"><?php echo $json_data; ?></textarea>

</body>
</html>