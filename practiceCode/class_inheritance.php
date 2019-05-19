<?php

class Car {
    
    var $wheels = 4;
    var $hood = 1;
    var $engine = 2;
    var $doors = 4;
    
    
    
    function moveWheels(){
        $this->wheels = 30;
        
    }
    
    function createDoors(){
        $this->doors = 5;
        
    }
    
    
    
}

$acura = new Car();


class Plane extends Car {
    
}

$boeing = new Plane();

echo $boeing->wheels;

if(class_exists("Plane")){
    echo "It does";
}

/*if(method_exists("Car","moveWheels")) {
    echo "Method exists!";
} else {
    echo "Sorry, you failed loser";
}*/

?>
