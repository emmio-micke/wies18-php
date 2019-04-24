<?php

class Student {
    public $name;
    public $age;
    public $teacher;
    
    function __construct($name = '', $age = 25) {
        $this->name = $name;
        $this->age = $age;
    }
    
    function print() {
        echo 'Name: ' . $this->name . PHP_EOL;
        echo 'Age: ' . $this->age . PHP_EOL;
        echo 'Teacher: ' . print_r($this->teacher, true) . PHP_EOL;
    }
}

class Teacher {
    public $name;
    public $age;

    function __construct($name = '', $age = 35) {
        $this->name = $name;
        $this->age = $age;
    }

    function print() {
        echo 'Name: ' . $this->name . PHP_EOL;
        echo 'Age: ' . $this->age . PHP_EOL;
    }
}

$student = new Student('kalle');
$teacher = new Teacher('Micke', 42);

$student->teacher = $teacher;

$student->print();
$teacher->print();
