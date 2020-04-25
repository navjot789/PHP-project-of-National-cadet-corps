
<?php
//error_reporting(0);
 ob_start();
 session_start();
// Check if the user is already logged in, if yes then redirect him to MYPROFILE page
if(isset($_SESSION["a_loggedin"]) && $_SESSION["a_loggedin"] === true){
   header("location: dashboard.php");
    exit();
}else
{
?>
<!DOCTYPE html>
<html lang="en">
<?php
include "pages/head.php";
include "sql/connect.php";

?>


<head>
    <?php
     include "pages/head.php";
     ?>

</head>

<body >
           
       <?php
			include "pages/login.php";
		?>

 
  <!--   Core JS Files   -->
<?php
include "pages/jquery.php";
?>

<script src="sql_js/login.js" type="text/javascript"></script>
</body>

</html>
<?php
}?>