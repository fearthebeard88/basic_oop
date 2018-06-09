<?php
// classes are basically blue prints
class Cars {

    function greeting() {
        echo "Hello Tim, I hope you are excited about your new job!";
    }

}
// instanciating the class Cars, aka building the class into an actual object rather than building a blue print
$honda = new Cars();
// using the built in method from the blue print (class)
$honda -> greeting();

?>