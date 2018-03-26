<?php
session_start();
?>


<?php


$nombre = $_POST['name'];
$pwd = $_POST['pwd'];


if ($_POST['name'] =='pocha' && $_POST['pwd']=='loli12345')
{

// Echo session variables that were set on previous page
  $_SESSION["user"]=$_POST['name'];

 echo '<meta http-equiv="Refresh" content="0;URL=ListAseguradora1.php">'; 

}
else
{

 echo '<meta http-equiv="Refresh" content="0;URL=user-login-v1.php">'; 
}



?>


