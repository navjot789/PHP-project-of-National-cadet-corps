<?php 
      $sql_prepare = 'SELECT eid,title,sub_title,description,img,cdate FROM events WHERE eid = ?';
                                            $stmt = $con->prepare($sql_prepare); 
                                            $stmt->bind_param('i',$_GET['event']);
                                            $stmt->execute();
                                            $stmt->bind_result($eid,$title,$sub_title,$description,$img,$cdate);
                                            $stmt->store_result();
                                            $numberofrows = $stmt->num_rows;
                                            $stmt->fetch();

                                           $jsons = array();
                                                      
                                           $jsons = array('eid'=>$eid,'title'=>$title,'sub_title'=>$sub_title,'description'=>$description,'img'=>$img,'cdate'=>$cdate);
                                            
                            $stmt->close();


if($_GET['event']!=='' && $numberofrows > 0)
{

                       

  ?> 



  <div class="wrapper">
    <div class="main">
      <div class="section section-white">
        <div class="container">
         
          <div class="row">
            <div class="col-md-10 ml-auto mr-auto">
              <div class="text-center">
                
                <a href="#">
                  <h3 class="title"><?php echo $jsons['title'];?></h3>
                </a>
                <h6 class="title-uppercase"><?php   echo  $newDate = date("F d Y", strtotime($jsons['cdate']));?></h6>
              </div>
            </div>
            <div class="col-md-8 ml-auto mr-auto">
              <a href="#">
               
                 <img src="assets/image/uploads/events/<?php echo $jsons['img'];?>" alt="Rounded Image" class="img-rounded img-responsive">
              </a>
              <div class="article-content">
                <h4><?php echo $jsons['sub_title'];?></h4>
                <p>
                 <?php echo $jsons['description'];?>
                </p>
                
              </div>
              <br/>
                <hr>
              <div class="article-footer">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <h5>Share:</h5>
                     <button class="btn btn-just-icon btn-twitter">
                          <i class="fab fa-twitter"></i>
                        </button>
                        <button class="btn btn-just-icon btn-facebook">
                          <i class="fab fa-facebook-f"> </i>
                        </button>
                        <button class="btn btn-just-icon btn-default">
                          <i class="fab fa-instagram"> </i>
                        </button>
                    </div>
                    <div class="col-md-4 ml-auto">
                      <div class="sharing">
                      
                      <?php
                      if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                      ?>
                         <h5>Want's to get in?</h5>
                        <div class="pull-right">
                          <form id="btn_enroll_form" method="post">

                          
                            <?php

                                        

                                    $sql_prepare = 'SELECT EXISTS(SELECT eid FROM assign_events WHERE eid = ? AND cid = ?)';
                                            $stmt = $con->prepare($sql_prepare); 
                                            $stmt->bind_param('ii',$_GET['event'],$_SESSION['cid']);
                                            $stmt->execute();
                                            $stmt->bind_result($eventid);
                                           
                                            $stmt->fetch();

                                           $j = array();
                                                      
                                           $j = array('eventid'=>$eventid);
                                            
                            $stmt->close();



                            ?>
                            
                            <?php if($j['eventid'] > 0) { ?>
                                <input type="hidden" id="del_id" name="del_id" value="<?php echo $jsons['eid']; ?>">
                                <button  class="btn btn-success btn-round "  type="submit" id="enrolled_btn" name="enrolled_btn"> <i class="fa fa-check"></i> Enrolled</a>

                            <?php } else { ?>
                                    <input type="hidden" id="event_id" name="event_id" value="<?php echo $jsons['eid']; ?>">
                                  <button  class="btn btn-info btn-round " type="submit" id="enroll_btn" name="enroll_btn"> <i class="fa fa-plus"></i> Enroll</a>

                            <?php } ?>
                            

                          </form>
                       
                      </div>

                      <?php
                      }else{?>
                          <h5>Before Enroll you need to login first.</h5>
                       <div class="pull-right">
                        <a href="index.php?page=6" class="btn btn-default btn-round "> <i class="fas fa-sign-in-alt"></i> login</a>
                      </div>
                        <?php
                      }?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
             
            </div>
          </div>
              

          <div class="row">
            <div class="related-articles">
              <h3 class="title">Related Events</h3>
              <legend></legend>
              <div class="container">
                <div class="row">
                  <?php
              
                  $sql_prepare = 'SELECT eid,title,sub_title,description,img,cdate FROM events ORDER BY rand() LIMIT 3';
                                                          $stmt = $con->prepare($sql_prepare); 
                                                          $stmt->execute();
                                                $stmt->bind_result($eid,$title,$sub_title,$description,$img,$cdate);
                                                $stmt->store_result();
                                               
                                                $stmt->fetch();

                                               $rand  = array();
                                                          
                                               $rand = array('eid'=>$eid,'title'=>$title,'sub_title'=>$sub_title,'description'=>$description,'img'=>$img,'cdate'=>$cdate);
                                                
                                $stmt->close();
              ?>

                  <div class="col-md-4">
                    <a href="index.php?page=12&event=<?php echo $rand['eid'];?>">
                      <img src="assets/image/uploads/events/<?php echo $rand['img'];?>" alt="Rounded Image" class="img-rounded img-responsive">
                    </a>
                     <a href="index.php?page=12&event=<?php echo $rand['eid'];?>">
                    <p class="blog-title" style="margin-top: 10px;"><?php echo $rand['title'];?></p>
                  </a>
                  </div>

                   <?php
              
                  $sql_prepare = 'SELECT eid,title,sub_title,description,img,cdate FROM events ORDER BY rand() LIMIT 3';
                                                          $stmt = $con->prepare($sql_prepare); 
                                                          $stmt->execute();
                                                $stmt->bind_result($eid,$title,$sub_title,$description,$img,$cdate);
                                                $stmt->store_result();
                                               
                                                $stmt->fetch();

                                               $rand2  = array();
                                                          
                                               $rand2 = array('eid'=>$eid,'title'=>$title,'sub_title'=>$sub_title,'description'=>$description,'img'=>$img,'cdate'=>$cdate);
                                                
                                $stmt->close();
              ?>

                    <div class="col-md-4">
                    <a href="index.php?page=12&event=<?php echo $rand2['eid'];?>">
                      <img src="assets/image/uploads/events/<?php echo $rand2['img'];?>" alt="Rounded Image" class="img-rounded img-responsive">
                    </a>
                     <a href="index.php?page=12&event=<?php echo $rand2['eid'];?>">
                    <p class="blog-title" style="margin-top: 10px;"><?php echo $rand2['title'];?></p>
                  </a>
                  </div>

                   <?php
              
                  $sql_prepare = 'SELECT eid,title,sub_title,description,img,cdate FROM events ORDER BY rand() LIMIT 3';
                                                          $stmt = $con->prepare($sql_prepare); 
                                                          $stmt->execute();
                                                $stmt->bind_result($eid,$title,$sub_title,$description,$img,$cdate);
                                                $stmt->store_result();
                                               
                                                $stmt->fetch();

                                               $rand3  = array();
                                                          
                                               $rand3 = array('eid'=>$eid,'title'=>$title,'sub_title'=>$sub_title,'description'=>$description,'img'=>$img,'cdate'=>$cdate);
                                                
                                $stmt->close();
              ?>


                   <div class="col-md-4">
                    <a href="index.php?page=12&event=<?php echo $rand3['eid'];?>">
                      <img src="assets/image/uploads/events/<?php echo $rand3['img'];?>" alt="Rounded Image" class="img-rounded img-responsive">
                    </a>
                     <a href="index.php?page=12&event=<?php echo $rand3['eid'];?>">
                    <p class="blog-title" style="margin-top: 10px;"><?php echo $rand3['title'];?></p>
                  </a>
                  </div>


                 
                </div>
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
?>
 <h1 class="title"> &nbsp;404
                              <br>
                              <p class="error-msg">No Event found on this event ID.</p>
                              <small>No Record Found!</small>
                            </h1>




<?php
}?>

