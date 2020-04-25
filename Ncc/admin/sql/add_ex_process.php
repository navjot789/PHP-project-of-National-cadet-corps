
<?php
  // Posted Values
//var_dump($_POST);
//var_dump($_FILES);

extract($_POST);//Extrating all post values at onces

//getting current indin time zone
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );

     
        

                if(empty($info))
                {
                    echo "Info field is required.";
                }       
            
            
                else
                {
                        


                                include "connect.php";
                                //rename the image file.
                                if($_FILES["pdf"]["name"]!=='' && !empty($_FILES["pdf"]["name"]))
                                {
                                        $imgfile_1=$_FILES["pdf"]["name"];
                                        // get the image extension
                                        $extension_1 = substr($imgfile_1,strlen($imgfile_1)-4,strlen($imgfile_1));
                                        // allowed extensions
                                        $allowed_extensions_1 = array(".pdf");
                                        $uniquesavename=time().uniqid(rand());
                                        $pdf= $uniquesavename.$extension_1;
                                }else
                                {
                                  $pdf='';
                                }
                              
                                
                                $info = mysqli_real_escape_string($con,$info);
                                $link = mysqli_real_escape_string($con,$link);
                               

                            
                                // Query for insertion data into database
                                $query=mysqli_query($con,"INSERT INTO exam(comment,pdf,link,cdate) VALUES('".$info."',
                                                                                                        '".$pdf."',
                                                                                                        '".$link."',
                                                                                                         '".$currentTime."')");
                                if($query)
                                {
                                    move_uploaded_file($_FILES['pdf']['tmp_name'],"../../assets/image/uploads/pdf/".$pdf);
                                    
                                    
                                     echo "inserted";
                                    
                                }
                                else
                                {
                                
                                 echo "Something Went Wrong. Your data is not inserted!";
                                }
                }


?>
