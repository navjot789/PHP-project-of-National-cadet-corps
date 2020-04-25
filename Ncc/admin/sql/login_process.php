<?php
// Initialize the session
session_start();

// Code for User login

if(isset($_POST['email']))
{
   $email=$_POST['email'];
   $password=$_POST['password'];

    
	if($email =='' || $password=='')
		{
  			echo "<span class='text-center'> <i class='fas fa-times-circle' style='color:#fff;'></i> All Fields are required.</span>";
		}

	 else{

		  include "connect.php";

		   $query=mysqli_query($con,"SELECT aid FROM admin WHERE username= '".$email."' AND password = '".$password."'");


		   
		   if($query)
		   {
				$num=mysqli_fetch_array($query); //fetching all matching records
				
				if($num > 0) 
				{
				  //if record found
					$_SESSION["a_loggedin"] = TRUE;
					$_SESSION['aid']=$num['aid'];
					
					echo "success";
					//header("location:myprofile.php");
					//exit();
				}
				else
				{
					
		         echo "<span class='text-center'> <i class='fas fa-times-circle' style='color:#fff;'></i> invalid email or password.</span>";
				}

		   }else
		   {
		   	
		   	  echo "<span class='text-center'> <i class='fas fa-times-circle' style='color:#fff;'></i> something went wrong!</span>";
		   }
		    
	 } 

}
?>