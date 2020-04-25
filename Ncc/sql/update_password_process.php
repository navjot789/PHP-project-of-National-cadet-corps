<?php
session_start();
// Check if the user is already logged in, if yes then redirect him to MYPROFILE page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

					include "connect.php";
					// Code user data updation


					if(isset($_POST['pass'])) //if fields is not empty
					{
						//getting forms values
						$password=$_POST['pass'];
						$cpassword=$_POST['cpass'];
					

						if(empty($password) ||empty($cpassword))
						{
							echo "<span class='text-danger'> <i class='fas fa-times-circle'></i> Both fields cannot be blank.</span>"; 
						}
						elseif ($cpassword !== $password) //phone validate
						 {
							echo "<span class='text-danger'> <i class='fas fa-times-circle'></i> Password Cannot match correctly.</span>"; 
						}
						else
						{
							//if everting looks fine uplode the values into DB

                        $encrypted = md5($password); 

						$query=mysqli_query($con,"UPDATE cadet SET password ='$encrypted' WHERE cid = '$_SESSION[cid]' ");

							if($query) //checking query working or not
							{
								echo "<span class='text-success'><i class='fas fa-check-circle'></i> Password update Successfully.</span>";
							}
							else{
							echo "<span class='text-danger'> <i class='fas fa-times-circle'></i> something went wrong!</span>";
							}

						}
					} 


}
else
{
	header('location: ../index.php?page=6');
	exit();
}  
?>