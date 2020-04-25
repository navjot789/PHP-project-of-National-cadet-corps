<?php
session_start();
include "connect.php";
//getting current indin time zone
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );

if(isset($_POST['event_id']))
{
	$eid=$_POST['event_id'];
	
	

	$query=mysqli_query($con,"INSERT INTO assign_events(eid,cid,cdate) VALUES('".$eid."','".$_SESSION['cid']."','".$currentTime."')");

		if($query) //checking query working or not
		{
			echo "Enrolled";
		}
		else{
		echo "ERROR";
		}

	
}


if(isset($_POST['del_id']))
{
	$del_id=$_POST['del_id'];
	
	

	$query=mysqli_query($con,"DELETE FROM assign_events WHERE eid='".$del_id."' AND cid='".$_SESSION['cid']."' ");

		if($query) //checking query working or not
		{
			echo "Enroll";
		}
		else{
		echo "ERROR";
		}

	
}
?>