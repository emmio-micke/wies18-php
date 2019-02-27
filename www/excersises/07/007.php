<?php

function myTest() {
    static $x = 0;
    echo "x: $x<br>";
    $x++;
}

myTest();
myTest();
myTest();
