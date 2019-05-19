<?php include "db.php";?>
<?php include "functions.php";?>
<?php createUserRow(); ?>

<?php include "includes/header.php";?>
  
   <div class="row">
    <div class="col-sm-6">
      <pre>
       <?php  readRows(); ?>
       </pre>
    </div>
    </div>

<?php include "includes/footer.php";?>