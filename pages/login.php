<?php require_once "header.php";


  if(isset($_POST['email']) &&  isset($_POST['password'])) {
    $data = new Data();
    $myUser = DataToObject2::createUsers($data->fetch(
      'SELECT * FROM ls32_users
      WHERE
        email = "'.$_POST['email'].'"
        AND password = "'.MD5($_POST['password']).'"'
      ));


    if($myUser) {
      $_SESSION['user-name'] = $myUser[0]->getName();
      $_SESSION['user-id'] = $myUser[0]->getId();

      echo getSuccessMssage(
        'Wellcome back '.$myUser[0]->getName(),
        'You will be aoutomaticly redirected to the main page.',
        ' Go to Events Page',
        'events.php'
      );

      header("Refresh:3; url=events.php");
    } else {
       echo getErrorMssage(
         'Login Failed',
         'You might have misspelled your email or password!',
         'Try again',
         'login.php'
       );
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

    <div class="ui icon warning message <?php if(!isset($invalidPassword)) echo 'invisible'; ?>">
      <i class="lock icon"></i>
      <div class="content">
        <div class="header">
          Login failed!
        </div>
        <p>You might have misspelled your email or password!</p>
      </div>
    </div>
    <div class="ui message">
      New to us? <a href="register.php">Sign Up</a>
    </div>
  </div>
</div>

<script>
 $(document)
   .ready(function() {
     $('.ui.form')
       .form({
         fields: {
           email: {
             identifier  : 'email',
             rules: [
               {
                 type   : 'empty',
                 prompt : 'Please enter your e-mail'
               },
               {
                 type   : 'email',
                 prompt : 'Please enter a valid e-mail'
               }
             ]
           },
           password: {
             identifier  : 'password',
             rules: [
               {
                 type   : 'empty',
                 prompt : 'Please enter your password'
               },
               {
                 type   : 'length[6]',
                 prompt : 'Your password must be at least 6 characters'
               }
             ]
           }
         }
       })
     ;
   })
 ;
 </script>

 <style type="text/css">
    .column {
      max-width: 450px;
    }
  </style>




<?php require_once "footer.php" ?>
