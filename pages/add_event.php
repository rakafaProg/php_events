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
    $data = new Data();
    $res=$data->insertData('
      INSERT INTO `ls32_events`
      (`date`, `name`, `description`) VALUES
      ("'.$_POST['date'].'","'.$_POST['name'].'","'.$_POST['details'].'")
    ');

    echo getSuccessMssage(
      'Event added successfuly',
      "If you want to go to this event, please join in the events page",
      'To add another event',
      'add_event.php'
    );
    header("Refresh:5; url=events.php");
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
        <div class="ui fluid large teal submit button">Save</div>
      </div>
      <div class="ui error message"></div>
    </form>
  </div>
</div>

</script>

<style type="text/css">
   .column {
     max-width: 450px;
   }
 </style>

 <script>
 $(document)
   .ready(function() {
     $('.ui.form')
       .form({
         fields: {
           name: {
             identifier  : 'name',
             rules: [
               {
                 type   : 'empty',
                 prompt : 'Please enter event name'
               }
             ]
           },
           details: {
             identifier  : 'details',
             rules: [
               {
                 type   : 'empty',
                 prompt : 'Please enter details'
               }
             ]
           },
           date: {
             identifier  : 'date',
             rules: [
               {
                 type   : 'empty',
                 prompt : 'Please enter date'
               }
             ]
           }
         }
       })
     ;
   })
 ;
 </script>



<?php require_once "footer.php"; ?>
