<?php require_once "header.php"; ?>

<?php
  if (!isset($userId)) {
    require_once "not-alowed.php";
    require_once "footer.php";
    die;
  }
?>






<div class="ui middle aligned center aligned grid">
  <div class="column">

    <form class="ui large form" action="login.php" method="POST">

      <div class="ui stacked segment">
        <div class="header teal ui huge">
          Add Event
        </div>
        <div class="field">
          <div class="ui input">
            <i class="tasks icon"></i>
            <input type="text" name="email" placeholder="Event Name">
          </div>
        </div>
        <div class="field">
          <div class="ui input">
            <i class="text file outline icon"></i>
            <textarea cols="10" name="password" placeholder="Details"></textarea>
          </div>
        </div>
        <div class="field">
          <div class="ui input">
            <i class="calendar icon"></i>
            <input type="date" name="password" placeholder="Date">
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

<?php require_once "footer.php"; ?>
