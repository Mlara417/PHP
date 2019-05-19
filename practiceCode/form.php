<?php

if(isset($_POST['submit'])) {
    
    $name = ['Moses','Freddy','Danny'];
    $minCharacter = 5;
    $max = 10;
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(strlen($username) < $minCharacter ) {
        echo "Username has to be longer than " . $minCharacter. '<br>';
    } 
    
    if (strlen($username) > $max) {
        echo "Username has to be shorter than " . $max;
    } 
    
    //echo "Hello " . $username . ".";
    //echo "Your password is " . $password;
    
    
    if(!in_array($username,$name)) {
        echo "Sorry You are not Allowed";
    } else {
        echo "Welcome";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="form.php" method="post">
    <input type="text" placeholder="Enter Username" name="username">
    <input type="password" placeholder="Enter Password" name="password">
    <br>
    <input type="submit" name="submit">
</form>  
</body>
</html>