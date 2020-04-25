<?php
include "connect.php";
// Code user Registration


//getting current indin time zone
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['email'])) //if email field is not empty
{
	//getting forms values
	$name=$_POST['name'];
	$text=$_POST['text'];
    $email=$_POST['email'];

	if($name== '' || 
		$text== '' || 
		$email== '') 
	{
 		 echo "Fields cannot be blank!";
	}
	
   else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) //email validate
     {
	  echo "Invalid email format"; 
	}
	else
	{
		//if everting looks fine uplode the values into DB

	  $query=mysqli_query($con,"INSERT INTO contact(name,email,message,cdate) VALUES('".$name."','".$email."','".$text."','".$currentTime."')");

		if($query) //checking query working or not
		{
			echo "inserted";
		}
		else{
		echo "Opps something went wrong!";
		}

	}
}   
?>