<?php
   $connection = mysqli_connect('localhost', 'root', '', 'firstDatabase');
    
    if(!$connection) {
        die("Database connection failed");
    }
?>
