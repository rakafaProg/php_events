<?php require_once "header.php";
require_once '../data/data.php';


if(isset($userId)) {
  $sql = 'SELECT `id`, `date`, `name`, `description` ,`id_user`, `id_event`
  FROM `ls32_events`
  LEFT JOIN `ls32_user_events` ON `id_event` = `id` AND `id_user`='.$userId;
} else {
  $sql = '
    SELECT `id`, `date`, `name`, `description` ,NULL as id_user
  FROM `ls32_events`
  ';
}
$data = new Data();
$myEvents = DataToObject::createEvents($data->fetch(
  $sql));


 ?>


<div class="ui three stackable cards">

  <?php
    foreach ($myEvents as $event) {
      ?>

      <div class="teal card">
        <div class="content">
          <div class="ui header teal"><?php echo $event->getName();?></div>
        </div>
        <div class="content">
          <h4 class="ui sub header"><?php echo $event->getDate();?></h4>
          <div class="ui small feed">
            <div class="event">
              <div class="content">
                <div class="summary">
                  
                   
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="extra content">
          <button class="ui button teal">Join Event</button>
          <?php 
            echo 'parti:'.$event->getParticipation();
          ?>
           <?php 
                   
                   //if(!is_null($event->getDescription()) )
                    //echo "You are going to this event";
                    //else
                     echo ($event->getDescription()>0)."hi";
                   ?>
        </div>
      </div>

  <?php  }

  ?>


</div>




<?php require_once "footer.php" ?>
