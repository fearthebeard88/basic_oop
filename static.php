<?php

class Cars {
    static $wheel_count = 4;
    // static properties are attached to instances
    static $door_count = 4;

    static function car_detail() {
        echo Cars :: $wheel_count . "<br/>";
        // static properties have to be called a different way than public, private, and protected properties.
        echo Cars :: $door_count;
    }
}

$honda = new Cars;

Cars :: car_detail();

echo "<br/>" . Cars :: $door_count;

?>