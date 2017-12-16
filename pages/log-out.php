<?php require_once "header.php";
  if(isset($userId)){
    $_SESSION['user-name'] = NULL;
    $_SESSION['user-id'] = NULL;
    header("Refresh:0");
  }
 ?>
 <div class="ui ten column grid">
   <div class="row">
     <div class="column"></div>
     <div class="twelve wide column">
       <div class="ui success message huge">
         <div class="header">
           Your have successfully loged out.
         </div>
         <p>We would love to see you again soon</p>
       </div>
     </div>
   </div>
 </div>


<?php require_once "footer.php" ?>
