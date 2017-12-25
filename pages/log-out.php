<?php require_once "header.php";
  if(isset($userId)){
    setUser(NULL, NULL);
    header("Refresh:0");
  }
  echo getSuccessMssage(
    'Your have successfully loged out.',
    'We would love to see you again soon',
    'Back to home page',
    'events.php'
  );
  
 ?>

<?php require_once "footer.php" ?>
