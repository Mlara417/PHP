<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<?php

session_start();

$_SESSION['testSession'] = "Well, hello there young
padawan. Welcome.";

?>



    
	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->

			<article class="main-content col-xs-8">
			
			<?php print_r($_GET); 
                
                $expiration = time() + (60*60*24*7);
                $name = "practiceCookie";
                $value = 838473793719734297483274;
                $myCookie = setcookie($name,$value,$expiration);
                
                echo $_SESSION['testSession']
                ?> <br>
			
		    <a href="9.php?id=hello">Click Here</a>
	
	<?php 

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>