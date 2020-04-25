<?php
// Initialize the session
session_start();

// Code for User login
  
if(isset($_POST['login_mail']))
{
   $email=$_POST['login_mail'];
   $password=$_POST['login_pwd'];

    
	if($email =='' || $password=='')
		{
  			echo "<span class='text-danger'> <i class='fas fa-times-circle'></i> All Fields are required.</span>";
		}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) //email validate
     {
	  echo "<span class='text-danger'> <i class='fas fa-times-circle'></i> Invalid email format</span>"; 
	 }
	 else{

		  include "connect.php";

		   $query=mysqli_query($con,"SELECT cid FROM cadet WHERE email= '".$email."' AND password = '".md5($password)."'");


		   
		   if($query)
		   {
				$num=mysqli_fetch_array($query); //fetching all matching records
				
				if($num > 0) 
				{
				  //if record found
					$_SESSION["loggedin"] = TRUE;
					$_SESSION['cid']=$num['cid'];
					
					echo "success";
					//header("location:myprofile.php");
					//exit();
				}
				else
				{
					
		         echo "<span class='text-danger'> <i class='fas fa-times-circle'></i> invalid email or password.</span>";
				}

		   }else
		   {
		   	
		   	  echo "<span class='text-danger'> <i class='fas fa-times-circle'></i> something went wrong!</span>";
		   }
		    
	 } 

}
?>