
<?php
session_start();
  // Posted Values
//var_dump($_POST);
//var_dump($_FILES);
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){ //if the user is login then only data submited

extract($_POST);//Extrating all post values at onces

//getting current indin time zone
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );

		$imgfile_1=$_FILES["pic"]["name"];
		$imgfile_2=$_FILES["marksheet"]["name"];

		$file_size_1 = $_FILES['pic']['size'];//getting size of pic]
		$file_size_2 = $_FILES['marksheet']['size'];

		// get the image extension
		$extension_1 = substr($imgfile_1,strlen($imgfile_1)-4,strlen($imgfile_1));
		$extension_2 = substr($imgfile_2,strlen($imgfile_2)-4,strlen($imgfile_2));
		// allowed extensions
		$allowed_extensions_1 = array(".jpg",".jpeg",".png");
		$allowed_extensions_2 = array(".jpg",".jpeg",".png");

				if($mname== '' || 
					$guardian== '' || 
					$post== '' || 
					$rail== '' || 
					$dspmu== '' || 
					$depart== '' || 
					$roll== '' || 
					$reg== '' || 
					$honour== '' || 
					$sem== '' || 
					$session== '' || 
					$address== '' || 
					$country== '' || 
					$state== '' || 
					$city== '' || 
					$pin== '' || 
					$m_s_c== '' || 
					$m_b_u== '' || 
					$m_p== '' || 
					$m_y== '' || 
					$i_s_c== '' || 
					$i_b_u== '' || 
					$i_p== '' || 
					$i_y== '' || 
					$o_s_c== '' || 
					$o_b_u== '' || 
					$o_p== '' || 
					$o_y== '' || 
					$q_1== '' || 
					$q_2== '' || 
					$q_3== '' || 
					$q_4== '' || 
					$q_5== '' || 
					$q_6== '' ||
					$bank_acc== '' || 
					$bank_name== '' || 
					$b_name== '' ||
					$ifsc== '' || 
					$aadhar== '' ||
					$kin_name== '' ||
			  		 $kin_address== '' ||
			  		 $kin_rel== '' ||
			  		 $k_no== '' || 
				    $_FILES["pic"]["name"]== '' || 
				    $_FILES["marksheet"]["name"]== '')
				{
					echo "All fields are important.";
				}		
				elseif(!in_array($extension_1,$allowed_extensions_1) || !in_array($extension_2,$allowed_extensions_2) )
				{
				// Validation for allowed extensions .in_array() function searches an array for a specific value.
				   echo "Invalid format. Only jpg / jpeg/ png format allowed for both pictures.";
				}
				elseif($file_size_1>=40000) //max size 40kb
				{
		       
		          echo "Maximum file size 40kb for Profile picture.";


				}
				elseif($file_size_2>=100000) //max size 40kb
				{
		         
		          echo "Maximum file size 100kb for Marksheet.";

				}
				else
				{
						include "connect.php";
						//rename the image file
						$imgnewfile_1=md5($imgfile_1).$extension_1;
						$imgnewfile_2=md5($imgfile_2).$extension_2;
						// Code for move image into directory
					
						// Query for insertion data into database
						$query=mysqli_query($con,"INSERT INTO enrollment(cid,mname,gurdian,post_office,rail,dspmu,depart,roll,reg_no,honour,sem,session,
																		address,country,state,city,pin,
																		m_s_c,m_b_u,m_p,m_y,i_s_c,i_b_u,i_p,i_y,o_s_c,o_b_u,o_p,o_y,
																		q_1,q_2,q_3,q_4,q_5,q_6,bank_acc,bank_name,branch_name,ifsc,aadhar,k_name,k_address,k_relation,k_no,
																		c_img,m_img,cdate) VALUES('".$_SESSION['cid']."',
																					  		 '".$mname."',
																					  		 '".$guardian."',
																					  		 '".$post."',
																					  		 '".$rail."',
																					  		 '".$dspmu."',
																					  		 '".$depart."',
																					  		 '".$roll."',
																					  		 '".$reg."',
																					  		 '".$honour."',
																					  		 '".$sem."',
																					  		 '".$session."',
																					  		 '".$address."',
																					  		 '".$country."',
																					  		 '".$state."',
																					  		 '".$city."',
																					  		 '".$pin."',
																					  		 '".$m_s_c."',
																					  		 '".$m_b_u."',
																					  		 '".$m_p."',
																					  		 '".$m_y."',
																					  		 '".$i_s_c."',
																					  		 '".$i_b_u."',
																					  		 '".$i_p."',
																					  		 '".$i_y."',
																					  		 '".$o_s_c."',
																					  		 '".$o_b_u."',
																					  		 '".$o_p."',
																					  		 '".$o_y."',
																					  		 '".$q_1."',
																					  		 '".$q_2."',
																					  		 '".$q_3."',
																					  		 '".$q_4."',
																					  		 '".$q_5."',
																					  		 '".$q_6."',
																					  		 '".$bank_acc."',
																					  		 '".$bank_name."',
																					  		 '".$b_name."',
																					  		 '".$ifsc."',
																					  		 '".$aadhar."',
																					  		 '".$kin_name."',
																					  		 '".$kin_address."',
																					  		 '".$kin_rel."',
																					  		 '".$k_no."',
																					  		 '".$imgnewfile_1."',
																					  		 '".$imgnewfile_2."',
																					  		 '".$currentTime."')");
						if($query)
						{
							move_uploaded_file($_FILES['pic']['tmp_name'],"../assets/image/uploads/".$imgnewfile_1);
							move_uploaded_file($_FILES['marksheet']['tmp_name'],"../assets/image/uploads/marksheet/".$imgnewfile_2);
							
							 echo "inserted";
							
						}
						else
						{
						
						 echo "Something Went Wrong. Your data is not inserted!";
						}
				}
}
else
{
	
	echo "user_not_login";
}
?>
