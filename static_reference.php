<?php
// self is for classes, while $this is for objects
    class Cars {
        static $wheel_count = 4;
        static $door_count = 4;

        static function car_detail() {
            // self = Cars in this case
            return self :: $wheel_count . "<br/>" . self :: $door_count . "<br/>";
        }
    }

    class Truck extends Cars {
        static function display() {
            // parent is referencing a static method from the parent class
            echo parent :: car_detail();
        }
    }

    Truck :: display();

?>