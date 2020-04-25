<?php
// Check if the user is already logged in, if yes then redirect him to MYPROFILE page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
   


                                      $sql_prepare = 'SELECT fname,lname,gender,phone,dob,email,cdate FROM cadet WHERE cid = ?';
                                            $stmt = $con->prepare($sql_prepare); 
                                            $stmt->bind_param('i',$_SESSION["cid"]);
                                            $stmt->execute();
                                            $stmt->bind_result($fname,$lname,$gender,$phone,$dob,$email,$cdate);
                                            $stmt->fetch();
                                          $json = array();
                                                      
                                            $json = array('fname'=>$fname,
                                                          'lname'=>$lname,
                                                          'gender'=>$gender,
                                                          'phone'=>$phone,
                                                          'dob'=>$dob,
                                                          'email'=>$email,
                                                          'cdate'=>$cdate); 
                                            $stmt->close();


                                           $sql_prepare = 'SELECT status FROM enrollment WHERE cid = ?';
                                            $stmt = $con->prepare($sql_prepare); 
                                            $stmt->bind_param('i',$_SESSION["cid"]);
                                            $stmt->execute();
                                            $stmt->bind_result($status);
                                            $stmt->store_result();
                                            $numberofrows = $stmt->num_rows;
                                            $stmt->fetch();

                                          $jsons = array();
                                                      
                                            $jsons = array('status'=>$status); 

?>

<div class="add-product sidebar-collapse">
<div class="main">
    <div class="section">
      <div class="container">
        <h3>Profile Settings</h3>
        <div>

          <div class="row">


            <div class="col-md-4 col-sm-4">
              <h6>Overview</h6>
             
              <ul class="list-group">

                <li class="list-group-item text-left">
                  <span class="pull-left"><strong>Application Status:&nbsp </strong></span>
                <span class="text-warning"> 
                  <strong>

                  <?php 

                    if($jsons['status']==0)
                    {
                      echo "<i class='fas fa-clock text-warning'></i> Pending";
                    }else if($jsons['status'] == 1)
                    {
                        echo "<i class='fas fa-check text-success'></i> Approved";
                    }else if($jsons['status'] == 2)
                    {
                        echo "<i class='fas fa-times-circle text-danger'></i> Rejected";
                    }else
                    {
                      echo "<i class='fas fa-times-circle text-danger'></i> SQL ERROR";
                    }
                   
                    


                  ?>
                    
                  </strong></span>
                 </li>

                 <li class="list-group-item text-left">
                  <span class="pull-left"><strong>Gender:&nbsp </strong></span>
                  <?php
                     if($json['gender'] == 'male')
                     {
                      echo '<i class="fas fa-male  fa-2x"></i>';
                     }else
                     {

                      echo '<i class="far fa-female fa-2x"></i>';
                     }

                  ?>
                 </li>


                 <li class="list-group-item text-left">
                  <span class="pull-left"><strong>Account created on &nbsp</strong></span>
                  <?php
                   
                   echo  $newDate = date("F d Y", strtotime($json['cdate']));

                  ?>
                   </li>

              

                <li class="list-group-item text-left">
                  <span class="pull-left"><strong>Total Enrolled Events &nbsp</strong></span> 
                  
                  <?php
                   $sql_prepare = 'SELECT a_id FROM assign_events WHERE cid = ?';
                                            $stmt = $con->prepare($sql_prepare); 
                                            $stmt->bind_param('i',$_SESSION["cid"]);
                                            $stmt->execute();
                                            $stmt->bind_result($a_id);
                                            $stmt->store_result();
                                            $numberofrows = $stmt->num_rows; 
                                            $stmt->fetch();

                                            //$r = array('a_id' => $a_id);

                                            if($numberofrows > 0)
                                            {
                                              echo   $numberofrows; 
                                              }                                            
                                            else{
                                               echo '<small class="text-warning" >Not Assign yet</small>';
                                            }

                  ?>
                </li>

              

              </ul> 
            
             
            </div>




    
            <div class="col-md-8 col-sm-8">
     
                  <form method="post" id="update_submit">
                    <strong><div id="upd_response"></div></strong> 
                      <div class="form-group">
                        <h6>First Name
                        
                        </h6>
                        <input type="text" class="form-control border-input" value="<?php echo $json['fname'];?>" placeholder="update first name" id="fname" name="fname">
                      </div>
                      <div class="form-group">
                        <h6>Last Name 
                        
                        </h6>
                        <input type="text" class="form-control border-input" value="<?php echo $json['lname'];?>" placeholder="update last name" id="lname" name="lname">
                      </div>

                       <div class="form-group">
                        <h6>Email
                        
                        </h6>
                        <input type="text" disabled class="form-control border-input" placeholder="email" value="<?php echo $json['email'];?>">
                      </div>
                      <div class="row price-row">
                        <div class="col-md-6">
                          <h6>Phone
                      
                          </h6>
                          <div class="input-group border-input">
                            <input type="text"   class="form-control border-input" placeholder="update phone" value="<?php echo $json['phone'];?>" id="phone" name="phone" max="10">
                            <div class="input-group-append">
                              <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <h6>Date</h6>
                          <div class="input-group border-input">
                            <input type="date"  class="form-control border-input" value="<?php echo $json['dob'];?>"  id="dob" name="dob">
                            <div class="input-group-append">
                             <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--
                      <div class="form-group">
                        <h6>Address</h6>
                        <textarea class="form-control textarea-limited" placeholder="Enter your Address here..." rows="13" maxlength="150"></textarea>
                        
                      </div>

                    -->
                      <div class="row buttons-row text-right">
                       <div class="col-md-12 col-sm-12">
                           <a href="index.php" class="btn btn-default  btn-round"  >Cancel</a>
                          <button class="btn btn-primary  btn-round" type="button" id="update_submit_btn">Save</button>
                        </div>
                      </div>

                </form>

                    </div>



                    <div class="col-md-4 col-sm-4"></div>

                    <div class="col-md-8 col-sm-8">
                       <h3>Reset Password</h3>

                    <form method="post" id="password_form">
                      <strong><div id="password_response"></div></strong> 

                        <div class="form-group">
                          <h6>New Password
                          
                          </h6>
                          <input type="password" class="form-control border-input password"  placeholder="New Password" id="pass" name="pass">
                        </div>
                        <div class="form-group">
                          <h6>Confirm Password
                          
                          </h6>
                          <input type="password" class="form-control border-input password"  placeholder="Re enter" id="cpass" name="cpass">
                        </div>

                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input toggle-password" type="checkbox" value=""> Display on landing page
                            <span class="form-check-sign"></span>
                          </label>
                        </div>

                       

                    
                      <div class="row buttons-row text-right">
                       <div class="col-md-12 col-sm-12">
                           
                          <button class="btn btn-primary  btn-round" type="button" id="update_pass">update</button>
                        </div>
                      </div>

                </form>

                    </div>


                  </div>


                
            
        </div>


      </div>
    </div>
  </div>
  </div>
<?php
}else
{
   header("location: index.php?page=6");
    exit();
}?>