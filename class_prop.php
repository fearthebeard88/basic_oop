<?php

class Cars {
// assigning properties to the class Cars
    var $wheel_count = 4;
    var $door_count = 4;

    function car_detail() {
        // $this refers to this specific class
        return "This car has " . $this -> wheel_count . " wheels, and " . $this -> door_count . " doors.";
    }

}

$honda = new Cars;

echo $honda -> wheel_count . "<br/>" . $honda -> door_count . "<br/>";

// changing the value of $honda door_count
echo "<br/>" . $honda -> car_detail();
?>