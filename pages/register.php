<?php require_once "header.php";

require_once '../data/data.php';
  if(isset($_POST['email']) &&  isset($_POST['password'])) {
    $data = new Data();
    $myUser = DataToObject::createUsers($data->fetch(
      'SELECT * FROM users
      WHERE
        email = "'.$_POST['email'].'"
        AND password = "'.MD5($_POST['password']).'"'
      ));


    if($myUser) {
      $_SESSION['user-name'] = $myUser[0]->getName();
      $_SESSION['user-id'] = $myUser[0]->getId();
      header("Refresh:0; url=log-in-success.php");

    } else {
      $invalidPassword = true;
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
        <p>There is allrady an account with that email.</p>
      </div>
    </div>
    <div class="ui message">
      Registered before? <a href="login.php">Log in</a>
    </div>
  </div>
</div>

<script>
 $(document)
   .ready(function() {
     $('.ui.form')
       .form({
         fields: {
           username: {
             identifier  : 'username',
             rules: [
               {
                 type   : 'empty',
                 prompt : 'Please enter a user name'
               }
             ]
           },
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
           },
           passwordrepeat: {
             identifier  : 'passwordrepeat',
             rules: [
               {
                 type   : 'empty',
                 prompt : 'Please repeat your password'
               },
               {
                 type   : 'length[6]',
                 prompt : 'Repeated password is too short',
                 equalTo: '#password'
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
