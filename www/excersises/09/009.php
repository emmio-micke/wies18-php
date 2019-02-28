<?php

trait CarService {
	public function booking($date) {
		echo "Created a booking at $date." . PHP_EOL;
	}
}

trait CarPainting {
	public function paint($color) {
		$this->color = $color;
	}
}

class Vehicle {
	use CarService;
	use CarPainting;
    
    public $color, $model, $speed, $noOfWheels;

    public function __construct($model_name = '') {
        $this->model = $model_name;
        $this->speed = 0;
    }

    public function accelerate($speed_change) {
        $this->speed += $speed_change;
    }

    public function print() {
        echo 'Model: ' . $this->model . PHP_EOL;
        echo 'Color: ' . $this->color . PHP_EOL;
        echo 'Speed: ' . $this->speed . PHP_EOL;
        echo 'No of wheels: ' . $this->noOfWheels . PHP_EOL;
    }
    
    public function draw_line() {
        echo '------------------' . PHP_EOL;
    }
}

$car = new Vehicle("Audi");
$car->color = "yellow";
$car->print();
$car->draw_line();

$car->booking("2019-04-13");
$car->draw_line();

$car->paint("blue");
$car->draw_line();

$car->print();

/*

- Skapa två stycken traits.

- Den ena ska implementera metoden booking() som tar ett datum och ett 
objekt som parameter och skriva ut ett meddelande om att en bokning är 
skapad för besiktning för fordonet.

- Den andra ska implementera metoden paint() som tar en parameter och 
byter färg på fordonet.

- Använd trait:sen i Vehicle-klassen och anropa dem från dina objekt.

*/
