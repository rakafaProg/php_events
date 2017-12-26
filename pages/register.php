<?php require_once "header.php";


  if(isset($_POST['email']) &&  isset($_POST['username']) &&
  isset($_POST['password']) &&  isset($_POST['passwordrepeat'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordrepeat = $_POST['passwordrepeat'];

    if($passwordrepeat != $password) {
      $invalidPassword = true;
      $errorMassage = "Passwords fields are not the same!";

    }

    else {
      $data = new Data();
      $myUser = DataToObject2::createUsers($data->fetch(
        'SELECT * FROM ls32_users
        WHERE
          email = "'.$email.'"'
        ));


      if(!$myUser) {
        $res=$data->insertData('INSERT INTO `ls32_users`(`name`, `email`, `password`) VALUES ("'.$username.'","'.$email.'","'.MD5($password).'")');
        if($res['insertResult']) {
          setUser($res['recordId'], $username);
          echo getSuccessMssage(
            'Wellcome '.$username.'!',
            'Your have successfully registered.',
            'To the events page.',
            'events.php'
          );
          header("Refresh:3; url=events.php");
          die;

        } else {
          $invalidPassword = true;
          $errorMassage = "Unknown error. Please try again.";
        }

      } else {
        $invalidPassword = true;
        $errorMassage = "There is allrady an account with that email.";
      }
    }


  }

?>




<div class="ui middle aligned center aligned grid">
  <div class="column">

    <h2 class="ui teal image header">
      <img src="../images/logo.png" class="image">
      <div class="content">
        Create a new account
      </div>
    </h2>
    <form class="ui large form" action="register.php" method="POST">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="username" placeholder="User Name">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input id="password" type="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="passwordrepeat" placeholder="Repeat Password">
          </div>
        </div>
        <div class="ui fluid large teal submit button">Register</div>
      </div>
      <div class="ui error message"></div>
    </form>

    <div class="ui icon warning message <?php if(!isset($invalidPassword)) echo 'invisible'; ?>">
      <i class="lock icon"></i>
      <div class="content">
        <div class="header">
          Login failed!
        </div>
        <p><?php if(isset($errorMassage)) echo $errorMassage; ?></p>
      </div>
    </div>
    <div class="ui message">
      Registered before? <a href="login.php">Log in</a>
    </div>
  </div>
</div>

<script src="../scripts/register-form-validation.js"> </script>

 <style type="text/css">
    .column {
      max-width: 450px;
    }
  </style>




<?php require_once "footer.php" ?>
