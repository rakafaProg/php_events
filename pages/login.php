<?php require_once "header.php";


  if(isset($_POST['email']) &&  isset($_POST['password'])) {
    require_once '../controlers/users-controller.php';

    $res = UsersController::tryLogin($_POST['email'], $_POST['password']);

    echo $res['msg'];

    if ($res['state']) {
      header("Refresh:3; url=events.php");
    }
    die;

  }

?>


<div class="ui middle aligned center aligned grid">
  <div class="column">

    <h2 class="ui teal image header">
      <img src="../images/logo.png" class="image">
      <div class="content">
        Log-in to your account
      </div>
    </h2>
    <form class="ui large form" action="login.php" method="POST">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="ui fluid large teal submit button">Login</div>
      </div>
      <div class="ui error message"></div>
    </form>

    <div class="ui message">
      New to us? <a href="register.php">Sign Up</a>
    </div>
  </div>
</div>

<script src="../scripts/login-form-validation.js"> </script>

 <style type="text/css">
    .column {
      max-width: 450px;
    }
  </style>

<?php require_once "footer.php" ?>
