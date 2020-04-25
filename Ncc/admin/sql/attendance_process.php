<?php
// Initialize the session
session_start();


error_reporting(0);
if(isset($_POST['cdate']))
{
   $cdate=$_POST['cdate'];
   $cadet_id=$_POST['cadet'];
   $mark=$_POST['mark'];

    
	if($cdate =='' || $cadet_id=='')
		{
  			echo "<span > <i class='fas fa-times-circle' style='color:#fff;'></i> All Fields are required.</span>";
		}

	 else{

		  include "connect.php";

		  $sql=mysqli_query($con,"SELECT attend_id FROM attendance WHERE cdate='".$cdate."' AND cid='".$cadet_id."' ");
		  $rowcount = mysqli_num_rows($sql);
           
           if($rowcount > 0)
           {
           	echo "<span > <i class='fas fa-times-circle' style='color:#fff;'></i> Attendance already marked of this date: $cdate</span>";
           }else
           {
           	  $query=mysqli_query($con,"INSERT INTO attendance(cid,stats,cdate) VALUES('".$cadet_id."','".$mark."','".$cdate."')");

		   if($query)
		   {
			
					echo "success";
				
		   }else
		   {
		   	
		   	  echo "<span class='text-center'> <i class='fas fa-times-circle' style='color:#fff;'></i> something went wrong!</span>";
		   }
		    
           }
		   
	 } 

}
?>