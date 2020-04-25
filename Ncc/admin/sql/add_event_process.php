
<?php
  // Posted Values
//var_dump($_POST);
//var_dump($_FILES);

extract($_POST);//Extrating all post values at onces

//getting current indin time zone
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );

		$imgfile_1=$_FILES["event_img"]["name"];
	

		$file_size_1 = $_FILES['event_img']['size'];//getting size of pic]
		

		// get the image extension
		$extension_1 = substr($imgfile_1,strlen($imgfile_1)-4,strlen($imgfile_1));
	
		// allowed extensions
		$allowed_extensions_1 = array(".jpg",".jpeg",".png");
		

				if(empty($_FILES["event_img"]["name"]) || empty($title) || empty($sub_title) || empty($text))
				{
					echo "All fields are important.";
				}		
				else if(!in_array($extension_1,$allowed_extensions_1))
				{
				// Validation for allowed extensions .in_array() function searches an array for a specific value.
				   echo "Invalid format. Only jpg / jpeg/ png format allowed for both pictures.";
				}
				else if($file_size_1 > 600000) //max size 600kb
				{
		       
		          echo "Maximum file size 600kb for picture.";


				}
			
				else
				{
						include "connect.php";
						//rename the image file.
						$uniquesavename=time().uniqid(rand());
						$imgnewfile_1= $uniquesavename.$extension_1;
						
						$title = mysqli_real_escape_string($con,$title);
						$sub_title = mysqli_real_escape_string($con,$sub_title);
						$text = mysqli_real_escape_string($con,$text);

					
						// Query for insertion data into database
						$query=mysqli_query($con,"INSERT INTO events(title,sub_title,description,img,cdate) VALUES('".$title."',
																					  		 '".$sub_title."',
																					  		 '".$text."',
																					  		 '".$imgnewfile_1."',
																					  		 '".$currentTime."')");
						if($query)
						{
							move_uploaded_file($_FILES['event_img']['tmp_name'],"../../assets/image/uploads/events/".$imgnewfile_1);
							
							
							 echo "inserted";
							
						}
						else
						{
						
						 echo "Something Went Wrong. Your data is not inserted!";
						}
				}


?>
