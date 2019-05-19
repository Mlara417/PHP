<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

    if(2<1){
        
        echo "wow";
        
    } elseif(4 < 3) {
        
        echo "wow2";
        
    } else {
        
        echo "I love php <br>";
        
    }
    
    for($i = 0; $i < 10; $i++){
        
        echo $i . "<br>";
        
    }
    
    $number = 1;
    switch($number){
        
        case 1:
        echo "case is 1";
        break;
        
        case 2:
        echo "case is 2";
        break;
        
        case 3:
        echo "case is 3";
        break;
        
        case 4:
        echo "case is 4";
        break;
        
        case 5:
        echo "case is 5";
        break;
        
        default:
        echo "none of the cases";
        break;
        
    }
/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>