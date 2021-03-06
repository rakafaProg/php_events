<?php
  require_once "header.php";
  require_once "../controlers/events-controler.php";

  if (isset($_GET['join']) || isset($_GET['leave'])) {
    $tryJoinOrLeave = EventControler::JoinOrLeaveEvent($_GET, $userId);
    echo $tryJoinOrLeave;
    header("Refresh:3; url=events.php");
    die;
  }

  $myEvents = DataToObject::getEvents($userId);

 ?>


<div class="ui three stackable cards">

    <?php
        foreach ($myEvents as $event) {
    ?>

    <div class="teal card">

      <div class="content">
        <div class="ui header teal"><?= $event->getName() ?></div>
      </div>

      <div class="content">
        <h4 class="ui sub header"><?= date('d-m-Y H:m', $event->getDate()) ?></h4>

          <div class="ui small feed">
            <div class="event">
              <div class="content">
                <div class="summary">
                    <?= nl2br($event->getDescription()) ?>
                </div>
              </div>
            </div>
          </div>

        </div>


        <div class="ui center aligned extra content">
            <i class="left floated users icon grey"
              title="<?= eventControler::getJoinedUsersString($event) ?>">
            </i>
            <i class="left floated icon"><?= $event->getUserCount() ?></i>

            <div class="ui large heart rating"
              data-rating="<?= eventControler::getRating($event) ?>"
              data-max-rating="5"></div>
        </div>

        <div class="extra content backTeal <?= tuggleVisilbe($userId, true) ?>">
          <?php $party = $event->getParticipation();?>
          <i class="right floated check circle outline icon teal big <?= tuggleVisilbe($party, true) ?>"
            title="Yor are going to this event"></i>

          <a class="ui button teal <?= tuggleVisilbe($party, false) ?>"
            href="events.php?join=<?php echo $event->getId(); ?>">
            Join Event
          </a>
          <a class="ui button grey <?= tuggleVisilbe($party, true) ?>"
            href="events.php?leave=<?php echo $event->getId(); ?>">
            Don't go
          </a>
        </div>

    </div>

  <?php } ?>

</div>

<script>
    $('.ui.rating').rating('disable');
</script>

<?php require_once "footer.php" ?>
