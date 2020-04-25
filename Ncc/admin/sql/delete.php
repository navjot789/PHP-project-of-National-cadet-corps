<?php
include "connect.php";
ob_start();
session_start();

if(isset($_GET['del_feedback']))  //deleting from table feedback
{
	$sql_prepare = 'DELETE FROM feedback WHERE fid = ?';
    $stmt = $con->prepare($sql_prepare); 
    $stmt->bind_param('i',$_GET['del_feedback']);
    if($stmt->execute())
    {
    	$_SESSION["message"]='<div class="alert alert-success">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <i class="material-icons">close</i>
				                    </button>
				                    <span>
				                      <b> Delete Success - </b> Provided feedback deleted successfully.</span>
			                  </div>';
	    header('location:../dashboard.php?page='.$_GET['return_url']);
	    exit();
    }
    else
    {
    	$_SESSION["message"]='<div class="alert alert-ganger">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <i class="material-icons">close</i>
				                    </button>
				                    <span>
				                      <b> Delete Error - </b> Something went wrong!.</span>
			                  </div>';
		header('location:../dashboard.php?page='.$_GET['return_url']);
	    exit();                  
    }
    $stmt->close();
                                                                                  
                                           
}

if(isset($_GET['del_contact'])) //deleting from table contact
{
	$sql_prepare = 'DELETE FROM contact WHERE cid = ?';
    $stmt = $con->prepare($sql_prepare); 
    $stmt->bind_param('i',$_GET['del_contact']);
    if($stmt->execute())
    {
    	$_SESSION["message"]='<div class="alert alert-success">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <i class="material-icons">close</i>
				                    </button>
				                    <span>
				                      <b> Delete Success - </b> Provided Contact Query deleted successfully.</span>
			                  </div>';
	    header('location:../dashboard.php?page='.$_GET['return_url']);
	    exit();
    }
    else
    {
    	$_SESSION["message"]='<div class="alert alert-ganger">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <i class="material-icons">close</i>
				                    </button>
				                    <span>
				                      <b> Delete Error - </b> Something went wrong!.</span>
			                  </div>';
		header('location:../dashboard.php?page='.$_GET['return_url']);
	    exit();                  
    }
    $stmt->close();
                                                                                  
                                           
}

if(isset($_GET['del_r_enroll']) || isset($_GET['del_a_enroll']) || isset($_GET['del_p_enroll']))  //deleting from table enrollment
{
	$sql_prepare = 'DELETE FROM enrollment WHERE fid = ?';
    $stmt = $con->prepare($sql_prepare); 

							if(isset($_GET['del_r_enroll']))
							{
					   			 $stmt->bind_param('i',$_GET['del_r_enroll']);

							}elseif(isset($_GET['del_a_enroll']))
							{
								 $stmt->bind_param('i',$_GET['del_a_enroll']);
							}else
							{
								$stmt->bind_param('i',$_GET['del_p_enroll']);
							}
    
    if($stmt->execute())
    {
    	$_SESSION["message"]='<div class="alert alert-success">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <i class="material-icons">close</i>
				                    </button>
				                    <span>
				                      <b> Delete Success - </b> Provided EnrollmentID deleted successfully.</span>
			                  </div>';

	  
	    					if(isset($_GET['del_r_enroll']) || isset($_GET['del_a_enroll']) || isset($_GET['del_p_enroll']))
							{
					   			 header('location:../dashboard.php?page='.$_GET['return_url']);
	 						     exit();

							}
    }
    else
    {
    	$_SESSION["message"]='<div class="alert alert-ganger">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <i class="material-icons">close</i>
				                    </button>
				                    <span>
				                      <b> Delete Error - </b> Something went wrong!.</span>
			                  </div>';

			if(isset($_GET['del_r_enroll']) || isset($_GET['del_a_enroll']) || isset($_GET['del_p_enroll']))
							{
					   			 header('location:../dashboard.php?page='.$_GET['return_url']);
	 						     exit();

							}                 
    }
    $stmt->close();
                                                                                  
                                           
}


if(isset($_GET['del_attend'])) //deleting from table attendance
{
	$sql_prepare = 'DELETE FROM attendance WHERE attend_id = ?';
    $stmt = $con->prepare($sql_prepare); 
    $stmt->bind_param('i',$_GET['del_attend']);
    if($stmt->execute())
    {
    	$_SESSION["message"]='<div class="alert alert-success">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <i class="material-icons">close</i>
				                    </button>
				                    <span>
				                      <b> Delete Success - </b> Provided AttendanceID deleted successfully.</span>
			                  </div>';
	    header('location:../dashboard.php?page='.$_GET['return_url']);
	    exit();
    }
    else
    {
    	$_SESSION["message"]='<div class="alert alert-ganger">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <i class="material-icons">close</i>
				                    </button>
				                    <span>
				                      <b> Delete Error - </b> Something went wrong!.</span>
			                  </div>';
		header('location:../dashboard.php?page='.$_GET['return_url']);
	    exit();                  
    }
    $stmt->close();
                                                                                  
                                           
}

if(isset($_GET['del_eid'])) //deleting from table events
{
	$sql_prepare = 'DELETE FROM events WHERE eid = ?';
    $stmt = $con->prepare($sql_prepare); 
    $stmt->bind_param('i',$_GET['del_eid']);
    if($stmt->execute())
    {
    	$_SESSION["message"]='<div class="alert alert-success">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <i class="material-icons">close</i>
				                    </button>
				                    <span>
				                      <b> Delete Success - </b> Provided Event deleted successfully.</span>
			                  </div>';
	    header('location:../dashboard.php?page='.$_GET['return_url']);
	 	 exit();

    }
    else
    {
    	$_SESSION["message"]='<div class="alert alert-ganger">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <i class="material-icons">close</i>
				                    </button>
				                    <span>
				                      <b> Delete Error - </b> Something went wrong!.</span>
			                  </div>';
		header('location:../dashboard.php?page='.$_GET['return_url']);
	 	exit();
                
    }
    $stmt->close();
                                                                                  
                                           
}

if(isset($_GET['del_enrolled'])) //deleting from table assign_events
{
	$sql_prepare = 'DELETE FROM assign_events WHERE a_id = ?';
    $stmt = $con->prepare($sql_prepare); 
    $stmt->bind_param('i',$_GET['del_enrolled']);
    if($stmt->execute())
    {
    	$_SESSION["message"]='<div class="alert alert-success">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <i class="material-icons">close</i>
				                    </button>
				                    <span>
				                      <b> Delete Success - </b> Provided Assigned Event deleted successfully.</span>
			                  </div>';
	    header('location:../dashboard.php?page='.$_GET['return_url']);
	 	 exit();

    }
    else
    {
    	$_SESSION["message"]='<div class="alert alert-ganger">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <i class="material-icons">close</i>
				                    </button>
				                    <span>
				                      <b> Delete Error - </b> Something went wrong!.</span>
			                  </div>';
		header('location:../dashboard.php?page='.$_GET['return_url']);
	 	exit();
                
    }
    $stmt->close();
                                                                                  
                                           
}


if(isset($_GET['del_cadet'])) //deleting from table cadet and with all the associated data of it
{
	$sql_prepare = 'DELETE FROM cadet WHERE cid = ?';
    $stmt = $con->prepare($sql_prepare); 
    $stmt->bind_param('i',$_GET['del_cadet']);
    $stmt->store_result();
    if($stmt->execute())
    {
    	
        $sql_prepare = "DELETE assign_events, attendance, enrollment FROM assign_events INNER JOIN attendance INNER JOIN enrollment WHERE assign_events.cid= attendance.cid and attendance.cid=enrollment.cid and assign_events.cid = ?";
	    $stmt = $con->prepare($sql_prepare); 
	    $stmt->bind_param('i',$_GET['del_cadet']);
	    $stmt->store_result();
    	
    	 if($stmt->execute())
    		{
				$_SESSION["message"]='<div class="alert alert-success">
						                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						                      <i class="material-icons">close</i>
						                    </button>
						                    <span>
						                      <b> Delete Success - </b> All the infomation regards with this cadet deleted successfully.</span>
					                  </div>';
			    header('location:../dashboard.php?page='.$_GET['return_url']);
			 	 exit();
			 }else
			 {
			 	$_SESSION["message"]='<div class="alert alert-ganger">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <i class="material-icons">close</i>
				                    </button>
				                    <span>
				                      <b> Delete Error - </b> Nested SQL not work. Something went wrong!.</span>
			                  </div>';
				header('location:../dashboard.php?page='.$_GET['return_url']);
			 	exit();
			 }	 

    }
    else
    {
    	$_SESSION["message"]='<div class="alert alert-ganger">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <i class="material-icons">close</i>
				                    </button>
				                    <span>
				                      <b> Delete Error - </b> Something went wrong!.</span>
			                  </div>';
		header('location:../dashboard.php?page='.$_GET['return_url']);
	 	exit();
                
    }
    $stmt->close();
                                                                                  
                                           
}

if(isset($_GET['del_ex_id'])) //deleting from table exam
{
	$sql_prepare = 'DELETE FROM exam WHERE ex_id = ?';
    $stmt = $con->prepare($sql_prepare); 
    $stmt->bind_param('i',$_GET['del_ex_id']);
    if($stmt->execute())
    {
    	$_SESSION["message"]='<div class="alert alert-success">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <i class="material-icons">close</i>
				                    </button>
				                    <span>
				                      <b> Delete Success - </b> Provided Exam Event|Noti deleted successfully.</span>
			                  </div>';
	    header('location:../dashboard.php?page='.$_GET['return_url']);
	 	 exit();

    }
    else
    {
    	$_SESSION["message"]='<div class="alert alert-ganger">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <i class="material-icons">close</i>
				                    </button>
				                    <span>
				                      <b> Delete Error - </b> Something went wrong!.</span>
			                  </div>';
		header('location:../dashboard.php?page='.$_GET['return_url']);
	 	exit();
                
    }
    $stmt->close();
                                                                                  
                                           
}

?>