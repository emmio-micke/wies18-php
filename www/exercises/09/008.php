<?php

class Vehicle {
    public $color, $model, $speed, $noOfWheels;

    public function __construct($model_name = '') {
        $this->model = $model_name;
        $this->speed = 0;
    }

    public function accelerate($speed_change) {
        $this->speed += $speed_change;
    }

    public function decelerate($speed_change) {
        if ($speed_change > $this->speed) {
            $this->speed = 0;
        } else {
            $this->speed -= $speed_change;
        }
    }
    
    public function print() {
        echo 'Model: ' . $this->model . PHP_EOL;
        echo 'Color: ' . $this->color . PHP_EOL;
        echo 'Speed: ' . $this->speed . PHP_EOL;
        echo 'No of wheels: ' . $this->noOfWheels . PHP_EOL;
    }
}

class Motorcycle extends Vehicle {
    
}

class Sportscar extends Vehicle {
    public $noOfDoors;

    public function print() {
        parent::print();
        echo 'No of doors: ' . $this->noOfDoors . PHP_EOL;
    }

}

$motorcycle = new Motorcycle('Honda');
//$motorcycle->print();

$ferrari = new Sportscar('Ferrari');
$ferrari->noOfDoors = 2;
//$ferrari->print();


$car = new Vehicle('Volvo');
$car->color = 'Yellow';
$car->noOfWheels = 3;

class Truck extends Vehicle {
    public $loads, $current_load = 10;

    public function unload($amount = null) {
        if (is_null($amount)) {
            $tmp = $this->current_load;
            $this->current_load = 0;
            return $tmp;
        } elseif ($amount > $this->current_load) {
            return false;
        } else {
            $this->current_load -= $amount;
            return $amount;
        }
        
    }
}

$truck = new Truck();
echo 'Current load: ' . $truck->current_load . PHP_EOL;

//$result = $truck->unload(15);
//$result = $truck->unload();
$result = $truck->unload(0);

if ($result !== false) {
    echo 'Unloaded: ' . $result . PHP_EOL;
    echo 'Current load: ' . $truck->current_load . PHP_EOL;
} else {
    echo 'Amount too high' . PHP_EOL;
}


/*

x Sportscar behöver klassvariabeln noOfDoors.

x Anpassa print()-metoden för Sportscar.

x Skapa klassen Truck som ärver från Vehicle och har variabeln loads 
(hur många kubikmeter den kan lasta).

x Hur håller vi reda på hur mycket som är lastat just nu?

x Skapa metoden unload() som tar en parameter och lastar av så mycket 
från lasten. Kontrollera att man inte försöker lasta av mer än vad som '
finns.

x Om parametern är för stor, returnera false.

x Om parametern är tom, lasta av allt och returnera hur mycket som har 
lastats av.

x Annars, returnera så mycket som har lastats av.

*/