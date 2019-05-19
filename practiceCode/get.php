<?php

//Gets URL parameter and prints into associative array
print_r($_GET);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
 
<?php

$id = 10;

?>
  
<a href="get.php?id=<?php echo $id; ?>">click here</a>

</body>
</html>