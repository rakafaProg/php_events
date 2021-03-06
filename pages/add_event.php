<?php require_once "header.php"; ?>

<?php

  if (!isset($userId)) {
    echo getErrorMssage(
      'Not allowed',
      'You must log in before adding events!',
      'Home',
      'events.php'
    );
    die;
  }

  if (isset($_POST['name']) && isset($_POST['details']) && isset($_POST['date'])) {

    if ($_POST['date'] < date("Y-m-d H:i:s")) {
      echo getErrorMssage(
        'Date invalid',
        "The date of an event can't be in the past!",
        'Try again',
        'add_event.php'
      );
      header("Refresh:3; url=add_event.php");
      die;
    }

    $res = DataToObject::createEvent($_POST);
    if ($res['recordId'] > -1 ) {
      if(isset($_POST['autoJoin']) && $_POST['autoJoin'] == 'yes') {
        header("Location: events.php?join=".$res['recordId']);

      }  else {
        echo getSuccessMssage(
          'Event added successfuly',
          "If you want to go to this event, please join in the events page",
          'To add another event',
          'add_event.php'
        );
        header("Refresh:5; url=events.php");
      }
    } else {
      echo getSuccessMssage(
        'Something went wrong',
        "",
        'Please try again',
        'add_event.php'
      );
    }
    die;
  }
?>


<div class="ui middle aligned center aligned grid">
  <div class="column">

    <form class="ui large form" action="add_event.php" method="POST">

      <div class="ui stacked segment">
        <div class="header teal ui huge">
          Add Event
        </div>
        <div class="field">
          <div class="ui input">
            <i class="tasks icon"></i>
            <input type="text" name="name" placeholder="Event Name">
          </div>
        </div>
        <div class="field">
          <div class="ui input">
            <i class="text file outline icon"></i>
            <textarea cols="10" name="details" placeholder="Details"></textarea>
          </div>
        </div>
        <div class="field">
          <div class="ui input">
            <i class="calendar icon"></i>
            <input type="datetime-local" name="date" placeholder="Date" required>
          </div>
        </div>
        <div class="inline field">
          <div class="ui toggle checkbox">
            <input name="autoJoin" type="checkbox" tabindex="0" class="hidden" value='yes' checked>
            <label>Automaticly <u>Join</u> the event</label>
          </div>
        </div>
        <div class="ui fluid large teal submit button">Save</div>
      </div>
      <div class="ui error message"></div>
    </form>
  </div>
</div>


<style type="text/css">
   .column {
     max-width: 450px;
   }
 </style>

 <script src="../scripts/add-event-form-validation.js"> </script>

<?php require_once "footer.php"; ?>
