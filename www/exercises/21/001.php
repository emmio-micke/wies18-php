<pre>
<?php

class Vehicle {
    protected $model;
    public $color;
    public $noOfWheels = 12;

    public function print() {
        echo 'Model: ' . $this->model . '<br>';
        echo 'Color: ' . $this->color . '<br>';
        echo 'No of wheels: ' . $this->noOfWheels . '<br>';
    }

    public function __construct($modelname) {
        $this->setModel($modelname);
    }

    public function getModel () {
        return $this->model;
    }

    public function setModel ($modelname) {
        if (is_null($modelname)) {
            throw new Exception;
        }
        $this->model = $modelname;
    }
}

class Car extends Vehicle {
    public $noOfWheels = 4;
    public $gear = 'Automatic';

    public function print() {
        parent::print();
        echo 'Gear: ' . $this->gear . '<br>';
    }
}

$myvehicle = new Vehicle('Volvo');
$mycar = new Car('Ford');
//$mycar->setModel(null);

$myvehicle->print();
$mycar->print();

//var_dump($myvehicle);
//var_dump($mycar);
