<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

function calculated(){
    
    $sum = 1000 + 20304;
    
    return $sum;
    
}

    
    
function calculate($number1, $number2){
    
    $sum = calculated();
    
    $sum = $sum + $number1 + $number2;
    
    echo $sum;
    
}
    
calculate(23, 43);
    

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>