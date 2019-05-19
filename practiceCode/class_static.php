<?php

class Car {
    
    static $wheels = 4;
    var $hood = 1;
    var $engine = 2;
    var $doors = 4;
    
    
    
    function moveWheels(){
        Car::$wheels = 30;
        
    }
    
    
}

$acura = new Car();

Car::moveWheels();

echo Car::$wheels;

/*if(method_exists("Car","moveWheels")) {
    echo "Method exists!";
} else {
    echo "Sorry, you failed loser";
}*/

?>
