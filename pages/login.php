<?php require_once "header.php";
  if(isset($_POST['email']) &&  isset($_POST['password'])) {
    $_SESSION['user-name'] = $_POST['email'];
    $_SESSION['user-id'] = 'x';
    header("Refresh:0; url=log-in-success.php");
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
