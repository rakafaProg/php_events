<?php require_once "header.php";
require_once '../data/data.php';
$data = new Data();
$myEvents = DataToObject::createEvents($data->fetch(
  'SELECT * FROM `events`'));


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
                   <?php echo $event->getDescription();?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="extra content">
          <button class="ui button teal">Join Event</button>
        </div>
      </div>

  <?php  }

  ?>


</div>




<?php require_once "footer.php" ?>
