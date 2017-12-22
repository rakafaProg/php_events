<?php require_once "header.php";
require_once '../data/data.php';
  if(!isset($userId) || !isset($_GET['eventid'])){
    echo "Something went wrong. please try again";
    die;
  } else {
    $data = new Data();
    $res=$data->insertData('
    DELETE FROM `ls32_user_events`
    WHERE
    `id_user`='.$userId.'
    AND
    `id_event`='.$_GET['eventid']
  );
    echo "success";
  }
 ?>
 <div class="ui ten column grid">
   <div class="row">
     <div class="column"></div>
     <div class="twelve wide column">
       <div class="ui yellow message huge">
         <div class="header">
           You will not be registered to this event any more
         </div>
         <p><a href="events.php">Go back to Event page.</a></p>
       </div>
     </div>
   </div>
 </div>


<?php require_once "footer.php" ?>
