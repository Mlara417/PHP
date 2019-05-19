<?php

$file = "example.txt";

if($handle = fopen($file, 'r')) {
    
    echo $content = fread($handle, filesize($file)); //each bite equals character
    
    fclose($handle);
    
} else {
    echo "The app was not able to write on the file";
}






?>
