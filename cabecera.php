<?php
session_start();
?>


<?php
  if (isset($_SESSION['user']))
  {
    echo " ".$_SESSION['user'];
  }
  else
  {
	echo "No tiene permitido visitar esta página.";
 echo '<meta http-equiv="Refresh" content="0;URL=user-login-v1.php">'; 
  }
	
?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>