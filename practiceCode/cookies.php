<?php

$name = "moses";
$value = 100;
$expiration = time() + (60*60*24*7); //one week after today
setcookie($name,$value,$expiration);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
 <?php
if(isset($_COOKIE["moses"])) {
    $me = $_COOKIE["moses"];
    echo $me;
} else {
    $me = "";
}


?>
  
</body>
</html>