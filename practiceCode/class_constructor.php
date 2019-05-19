<?php

class Car {
    
    var $wheels = 4;
    var $hood = 1;
    var $engine = 2;
    var $doors = 4;
    
    
    
    function __construct(){
       echo $this->wheels = 30;
        
    }
    
    
}

$acura = new Car();

/*if(method_exists("Car","moveWheels")) {
    echo "Method exists!";
} else {
    echo "Sorry, you failed loser";
}*/

?>
