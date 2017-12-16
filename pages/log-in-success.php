<?php require_once "header.php";
  if(!isset($userId)){
    echo "Something went wrong. please try again";
    die;
  }
 ?>
 <div class="ui ten column grid">
   <div class="row">
     <div class="column"></div>
     <div class="twelve wide column">
       <div class="ui success message huge">
         <div class="header">
           Wellcome <?php echo $userName; ?>
         </div>
         <p>Your are successfully loged in.</p>
       </div>
     </div>
   </div>
 </div>


<?php require_once "footer.php" ?>
