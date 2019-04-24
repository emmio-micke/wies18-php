<?php

function inverse($var) {
    echo "Entering inverse<br>";
    print_r($var);
    return 1 / $var;
}

$i = 5;
if($i > 0) {
//    echo inverse($i);
}

function pr($var) {
    echo "<pre>";
    //var_dump($var);

    $a = "jfjfjfj";
    $b = 123;

    // print_r(get_defined_vars());
    // debug_print_backtrace();
    print_r(debug_backtrace());
    
    echo "</pre>";
}

function array_something($arr) {
    pr($arr);
    foreach ($arr as $key => $value) {
        // Do something
    }
}

function array_something2($arr) {
    pr($arr);
    foreach ($arr as $key => $value) {
        // Do something
    }
}

$arr = [
    "value1",
    "value2",
    "value3"
];

$c = true;

array_something($arr);
//array_something2($arr);

/*
print_r($var);
var_dump($var);
get_defined_vars();
debug_print_backtrace();
debug_backtrace();
*/
