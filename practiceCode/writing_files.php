<?php

$file = "example.txt";

if($handle = fopen($file, 'w')) {
    
    fwrite($handle, 'Good stuff');
    
    fclose($handle);
    
} else {
    echo "The app was not able to write on the file";
}






?>
