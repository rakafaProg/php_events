<?php require_once "header.php";

  if(!isset($userId) || !isset($_GET['eventid'])){
    echo "Something went wrong. please try again";
    die;
  } else {
    $data = new Data();
    $res=$data->insertData('
    INSERT INTO `ls32_user_events`
    (`id_user`, `id_event`)
    VALUES
    ('.$userId.','.$_GET['eventid'].')
    ');
    echo "success";
  }
 ?>
 <div class="ui ten column grid">
   <div class="row">
     <div class="column"></div>
     <div class="twelve wide column">
       <div class="ui success message huge">
         <div class="header">
           You have successfully joind the event
         </div>
         <p><a href="events.php">Go back to Event page.</a></p>
       </div>
     </div>
   </div>
 </div>


<?php require_once "footer.php" ?>
