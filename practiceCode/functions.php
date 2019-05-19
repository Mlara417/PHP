<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

function init() {
    
    calculate();
    echo "<br>";
    saySomething();
    
    
}

function calculate(){
    
   echo 45 + 54;    
    
}
    
function saySomething(){
    
   echo "Hello there";    
    
}

init();

?>
</body>
</html>