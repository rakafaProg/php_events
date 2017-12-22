<?php require_once "header.php";
require_once '../data/data.php';
function formatDate($date) {

}

if(isset($userId)) {
  $sql = 'SELECT `id`, `date`, `name`, `description` ,`id_user`
  FROM `ls32_events`
  LEFT JOIN `ls32_user_events` ON `id_event` = `id` AND `id_user`='.$userId.'
  ORDER BY `id_user` DESC, `date` ASC';
} else {
  $sql = 'SELECT `id`, `date`, `name`, `description` ,NULL as id_user
  FROM `ls32_events` ORDER BY `date` ASC
  ';
}
$data = new Data();
$myEvents = DataToObject::createEvents($data->fetch(
  $sql));

  $x = $data->fetch(
    'SELECT COUNT(`id_user`) AS "cnt", `id_event` FROM `ls32_user_events` GROUP BY `id_event`');
    foreach ($x as $eventkey) {
      $myEvents[$eventkey['id_event']]->setUserCount($eventkey['cnt']);
    }

//SELECT count(id_user) FROM `ls32_user_events` WHERE id_event=1
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
          <h4 class="ui sub header"><?php

            echo date('d-m-Y',date_create($event->getDate())->getTimestamp())
          ?></h4>
          <div class="ui small feed">
            <div class="event">
              <div class="content">
                <div class="summary">
                  <?=  $event->getDescription() ?>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ui center aligned extra content">
          <?php
            $rate = 0;
            $users = $event->getUserCount();

            if($users == 0) $rate = 0;
            elseif ($users < 4)  $rate = 1;
            elseif ($users < 7)  $rate = 2;
            elseif ($users < 10)  $rate = 3;
            elseif ($users < 13)  $rate = 4;
            elseif ($users >= 13)  $rate = 5;
          ?>

          <i class="left floated users icon grey"
          title="<?php
          if($users > 1) echo $users.' users are going to this event';
          elseif($users == 1) echo '1 user is going to this event';
          else echo 'No user is going to this event yet';
          ?>"> </i> <i class="left floated icon"><?= $users ?></i>

          <div class="ui large heart rating" data-rating="<?= $rate ?>" data-max-rating="5"></div>
        </div>

        <div class="extra content backTeal <?php if(!isset($userId)) echo 'invisible'; ?>">
          <?php
            $pari = $event->getParticipation();
            if ($pari)
              echo '<i class="right floated add user icon teal big" title="Yor are going to this event"></i>';

          ?>
          <a class="ui button teal <?php if ($pari) echo 'invisible'; ?>" href="join-event.php?eventid=<?php echo $event->getId(); ?>">Join Event</a>
          <a class="ui button grey <?php if (!$pari) echo 'invisible'; ?>" href="dont-join-event.php?eventid=<?php echo $event->getId(); ?>">Don't go</a>

        </div>
      </div>

  <?php  }

  ?>


</div>

<script>
    $('.ui.rating').rating('disable');

;
</script>

<?php require_once "footer.php" ?>
