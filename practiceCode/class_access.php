<?php

class Car {
    
    //public can be accessed anywhere
    //protected can be accessed within parent,child classes and methods
    //private can only be accessed from original class
    
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 2;
    var $doors = 4;
    
    
    
    function showProperty(){
        
        echo $this->hood;
        
    }
    
    
    
}

$acura = new Car();
$truck = new Truck();

//echo $acura->showProperty();

class Truck extends Car {
    
        function showProperty(){
        
        echo $this->engine;
        
    }
    
    
    
}


echo $truck->showProperty();

/*if(method_exists("Car","moveWheels")) {
    echo "Method exists!";
} else {
    echo "Sorry, you failed loser";
}*/

?>
