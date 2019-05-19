<?php

class Car {
    
    function moveWheels(){
        echo "Wheels move forward";
        
    }
    
    
    
}

if(method_exists("Car","moveWheels")) {
    echo "Method exists!";
} else {
    echo "Sorry, you failed loser";
}

?>
