<?php
session_start();
// Check if the user is already logged in, if yes then redirect him to MYPROFILE page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

					include "connect.php";
					// Code user data updation


					if(isset($_POST['fname'])) //if fields is not empty
					{
						//getting forms values
						$fname=$_POST['fname'];
						$lname=$_POST['lname'];
						$phone=$_POST['phone'];
						$dob=$_POST['dob'];
						

						if(empty($fname) ||empty($lname) || empty($phone) || empty($dob))
						{
							echo "<span class='text-danger'> <i class='fas fa-times-circle'></i> All fields are required.</span>"; 
						}
						elseif (!preg_match('/^[0-9]{10}+$/', $phone)) //phone validate
						 {
							echo "<span class='text-danger'> <i class='fas fa-times-circle'></i> Invalid Phone number</span>"; 
						}
						else
						{
							//if everting looks fine uplode the values into DB

						$query=mysqli_query($con,"UPDATE cadet SET fname ='$fname', lname = '$lname', phone = '$phone', dob = '$dob' WHERE cid = '$_SESSION[cid]' ");

							if($query) //checking query working or not
							{
								echo "<span class='text-success'><i class='fas fa-check-circle'></i> Values update Successfully.</span>";
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