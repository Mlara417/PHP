<?php

if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
    
   $connection = mysqli_connect('localhost', 'root', '', 'firstDatabase');
    
    if($connection) {
        
        echo "we are connected";
            
    } else {
        
        die("Database connection failed");

    }
    

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
   <div class="row">
    <div class="col-xs-6">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
                
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">         
            </div>
            
            <input class="btn btn-primary" type="submit" name="submit" values="Submit">
            
        </form>
    </div>
</div>
</div>
<?php



?>
</body>
</html>