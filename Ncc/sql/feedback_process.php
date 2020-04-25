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
	$sub=$_POST['sub'];
	$text=$_POST['text'];
    $email=$_POST['email'];

	if($name== '' || 
		$sub== '' || 
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

	  $query=mysqli_query($con,"INSERT INTO feedback(name,email,sub,message,cdate) VALUES('".$name."','".$email."','".$sub."','".$text."','".$currentTime."')");

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