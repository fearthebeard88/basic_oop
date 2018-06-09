<?php

class Cars {
    // private properties, that are only accesible through the class
    private $wheel_count = 4;
    private $door_count = 4;
    private $seat_count = 8;
    // function to echo out the private properties so we can see them in an instantiated object from this class
    function get_values() {
        echo $this -> seat_count;
    }
    // function to change these private properties in an instantiated object's class
    function set_values() {
        $this -> seat_count = 5;
    }
}

$honda = new Cars();

echo $honda -> get_values() . "<br/>";

$honda -> set_values();
echo $honda -> get_values() . "<br/>";

$saturn = new Cars();

$saturn -> get_values();

?>