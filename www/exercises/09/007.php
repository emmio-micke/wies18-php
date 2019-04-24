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
    
}

$motorcycle = new Motorcycle('Honda');
$motorcycle->print();

$ferrari = new Sportscar('Ferrari');
$ferrari->print();


$car = new Vehicle('Volvo');
$car->color = 'Yellow';
$car->noOfWheels = 3;

echo 'Speed: ' . $car->speed . PHP_EOL;

$car->accelerate(10);
echo 'Speed: ' . $car->speed . PHP_EOL;

$car->accelerate(10);
echo 'Speed: ' . $car->speed . PHP_EOL;

$car->decelerate(10);
echo 'Speed: ' . $car->speed . PHP_EOL;

$car->decelerate(30);
echo 'Speed: ' . $car->speed . PHP_EOL;

$car->print();

/*

x Skapa klassen Vehicle med klassvariablerna color, model, speed och noOfWheels.

x Skapa metoderna accelerate() och decelerate() som båda tar en parameter och ökar 
resp minskar hastigheten med parametern. Kontrollera att parametern inte är orimlig, 
t ex att hastigheten inte blir mindre än 0.

x Skapa metoden print() som skriver ut egenskaperna för fordonet.

x Skapa klasserna Motorcycle och Sportscar som ärver av Vehicle.

x Skapa objekt av båda klasserna och kör metoden print() på dem.

*/
