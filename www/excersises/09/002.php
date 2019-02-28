<?php

class Person {
    public $name;
    public $age;
    
    function __construct($name = '', $age = 25) {
        $this->name = $name;
        $this->age = $age;
    }
    
    function print() {
        echo 'Name: ' . $this->name . PHP_EOL;
        echo 'Age: ' . $this->age . PHP_EOL;
    }
}

class Student extends Person {
    public $teacher;
}

class Teacher extends Person {
}

$student = new Student('kalle');
$teacher = new Teacher('Micke', 42);

$student->teacher = $teacher;

$student->print();
$teacher->print();
