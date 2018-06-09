<?php

class Person {

    var $name = "Tim";

    function greeting() {
        return "Hello " . $this -> name . " , Welcome to the first day of your new life!";
    }

}

$someone = new Person();

class Alien extends Person {
    var $species = "Thargoid";

    function greetings() {
        return "Take me to your leader " . $this -> name . ", we are " . $this -> species . "'s.";
    }
}

$alien = new Alien();

echo $someone -> greeting() . "<br/>";

echo $alien -> greetings() . "<br/>";

?>