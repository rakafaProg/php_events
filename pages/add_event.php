<?php require_once "header.php"; ?>

<?php
  if (!isset($userId)) {
    require_once "not-alowed.php";
    require_once "footer.php";
    die;
  }
?>




<h1 class="ui header teal">Add Event Page</h1>

<?php require_once "footer.php"; ?>
