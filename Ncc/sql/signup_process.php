<?php
include "connect.php";
// Code user Registration


//getting current indin time zone
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['email'])) //if email field is not empty
{
	//getting forms values
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$dob=$_POST['dob'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);  //converting password into md5 encryption

	
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) //email validate
     {
	  echo "<span class='text-danger'> <i class='fas fa-times-circle'></i> Invalid email format</span>"; 
	}
	elseif (!preg_match('/^[0-9]{10}+$/', $phone)) //phone validate
	 {
		echo "<span class='text-danger'> <i class='fas fa-times-circle'></i> Invalid Phone number</span>"; 
	}
	else
	{
		//if everting looks fine uplode the values into DB

	$query=mysqli_query($con,"INSERT INTO cadet(fname,lname,gender,phone,dob,email,password,cdate) VALUES('".$fname."','".$lname."','".$gender."','".$phone."','".$dob."','".$email."','".$password."','".$currentTime."')");

		if($query) //checking query working or not
		{
			echo "<span class='text-success'><i class='fas fa-check-circle'></i> You are successfully register. Now you can Login</span>";
		}
		else{
		echo "<span class='text-danger'> <i class='fas fa-times-circle'></i> Not register something went wrong!</span>";
		}

	}
}   
?>