
<?php
session_start();
  // Posted Values
//var_dump($_POST);
//var_dump($_FILES);
if(isset($_SESSION["a_loggedin"]) && $_SESSION["a_loggedin"] === true){ //if the user is login then only data submited

extract($_POST);//Extrating all post values at onces


				if(empty($status))
				{
					echo "Select Status first!";
				}		
				
				else
				{
						include "connect.php";
					
						$query=mysqli_query($con,"UPDATE enrollment SET status='$status' WHERE cid = '$_POST[cadet]'");
						if($query)
						{
						
							 echo "updated";
							
						}
						else
						{
						
						 echo "Something Went Wrong. Your data is not updated!";
						}
				}
}
else
{
	
	echo "user_not_login";
}
?>
