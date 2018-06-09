<?php

class Cars {
    // available everywhere
    public $wheel_count = 4;
    // only available in this class
    private $door_count = 4;
    // available in this class and any subclasses
    protected $window_count = 6;

    function car_detail() {
        echo "This car has " . $this -> wheel_count . " wheels, " . $this -> door_count . " doors, and " . $this -> window_count . " windows.";
    }
}

$honda = new Cars();

echo $honda -> car_detail();

?>