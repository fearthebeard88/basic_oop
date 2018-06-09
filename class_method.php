<?php

class Cars {

    // defining a function inside a class, inside objects, functions are called methods
    function greetings() {

    }

    function salutations() {
        
    }

}

// built in function to display methods of a class
$methods = get_class_methods('Cars');

forEach($methods as $method) {
    echo $method . "<br/>";
}

?>