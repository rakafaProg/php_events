<?php session_start();

  require_once '../data/bll.php';
  require_once '../controlers/view-control.php';

  if(isset($_SESSION['user-id']) and isset($_SESSION['user-name'])) {
    $userId = $_SESSION['user-id'];
    $userName = $_SESSION['user-name'];
  } else {
    $userId = null;
  }

  function tuggleVisilbe($param, $isOnlyUsers) {
    if ($isOnlyUsers && !($param))
      return 'invisible';
    if (!$isOnlyUsers && ($param))
      return 'invisible';
    return '';
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Events</title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="../style/main.css" />
    <link rel="stylesheet" href="../semantic-ui/semantic.min.css" />
    <link rel="stylesheet" href="../semantic-ui/icon.css" />
    <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/components/icon.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../semantic-ui/semantic.min.js"></script>


</head>

<body class="ui header teal">

<div class="ui top fixed menu">
  <div class="item">
    <img src="../images/logo.png">
  </div>

  <a class="item ui header teal" href="events.php">Events</a>
  <a class="item ui header teal <?= tuggleVisilbe($userId, true) ?>" href="add_event.php">Add Event</a>
  <a class="item ui header teal <?= tuggleVisilbe($userId, false) ?>" href="login.php">Log-in</a>
  <a class="item ui header teal <?= tuggleVisilbe($userId, false) ?>" href="register.php">Register</a>
  <div class="item ui right header blue <?= tuggleVisilbe($userId, true) ?>">
    <?php if(isset($userName)) echo "Wellcome ".$userName; ?>
  </div>
  <a class="item ui header blue <?= tuggleVisilbe($userId, true) ?>" href="log-out.php">Sign-out</a>

</div>
<p> .
</p>

<main>
