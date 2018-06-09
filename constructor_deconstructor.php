<?php

class Cars {
    public $wheel_count = 4;
    static $miles = 100000;
    // function that will automatically run when a class gets instantiated into an object
    function __construct() {
        echo $this -> wheel_count . "<br/>";
        echo self :: $miles++ . "<br/>";
    }
}

$honda = new Cars();
$saturn = new Cars();

class Trucks extends Cars {

}

$ford = new Trucks();

?>