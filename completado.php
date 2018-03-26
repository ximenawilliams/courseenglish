

<script language="JavaScript" type="text/javascript">

var pagina="ListAseguradora1.php"
function redireccionar() 
{
location.href=pagina
} 
setTimeout ("redireccionar()", 10000);

</script>

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
                      

Successfully completed the course 1