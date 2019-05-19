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
$suv = new Car();

echo $acura -> wheels . "<br>";
echo $suv -> wheels = 6 . "<br>";

$suv -> createDoors();
echo $suv -> doors;

/*if(method_exists("Car","moveWheels")) {
    echo "Method exists!";
} else {
    echo "Sorry, you failed loser";
}*/

?>
