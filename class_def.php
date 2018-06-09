<?php

// defining a class of object
class Cars {

}

// function that finds all the classes in a file
$my_classes = get_declared_classes();

// for each loop that writes out each defined class, fyi there are a lot of built in ones!
forEach($my_classes as $class) {
    echo $class . "<br/>";
}

?>