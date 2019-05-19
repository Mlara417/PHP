<?php include "db.php";?>
<?php

function showAllData(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        echo("Query FAILED" . mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
                
        echo "<option value='$id'>$id</option>";
            }
    
}


function updateTable(){
    
    global $connection;
    
    if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    
    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "passwords = '$password' ";
    $query .= "WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    } else {
        echo "Record Updated";
    }
    }
}



function createUserRow(){
    
    if(isset($_POST['submit'])){
    
    global $connection;

   $username = $_POST['username'];
   $password = $_POST['password'];
    
    //Helps add security and escape special characters in string for use in sql
    $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);
    
    //making encryption method for password called hashing. Returns hashed string using chosen algorithm. Salt is optional but more secure.
    //$hashFormat = "$2y$10$";
    //$salt = "iusesomecrazystrings22";
    //$hashF_and_salt = $hashFormat . $salt;   
    //$password = crypt($password,$hashF_and_salt);
    
    //Does the same as above but in a predefined function
    $password = password_hash($password, PASSWORD_DEFAULT);
        
    $query = "INSERT INTO users(username,passwords) ";
    $query .= "VALUES ('$username', '$password')";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result) {
        echo("Query FAILED" . mysqli_error($connection));
    } else {
        echo "Record Created";
    }
}
    
}

function deleteUserRow(){
    
    if(isset($_POST['submit'])) {
    
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    
    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    } else {
        echo "Record Deleted";
    }
    }
}



function readRows() {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        echo("Query FAILED" . mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }    
}



?>
