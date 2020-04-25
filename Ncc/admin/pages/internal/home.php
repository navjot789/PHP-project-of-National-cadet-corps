
            <div class="row">


                        <?php 



                        function humanTiming($time) //fb time ago function calling
                            {

                                $time = time() - $time; // to get the time since that moment
                                $time = ($time<1)? 1 : $time;
                                $tokens = array (
                                    31536000 => 'year',
                                    2592000 => 'month',
                                    604800 => 'week',
                                    86400 => 'day',
                                    3600 => 'hour',
                                    60 => 'minute',
                                    1 => 'second'
                                );

                                foreach ($tokens as $unit => $text) {
                                    if ($time < $unit) continue;
                                    $numberOfUnits = floor($time / $unit);
                                    return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
                                }



                            }
                             $sql_prepare = 'SELECT cid FROM cadet';
                                            $stmt = $con->prepare($sql_prepare); 
                                           // $stmt->bind_param('i',$_GET['event']);
                                            $stmt->execute();
                                            $stmt->bind_result($cid);
                                            $stmt->store_result();
                                            $numberofrows = $stmt->num_rows;
                                            $stmt->fetch();
                                             $stmt->close();

                        
                        ?> 
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <i class="fas fa-users"></i>
                    </div>
                    <p class="card-category">Cadets</p>
                    <h3 class="card-title"><?php echo $numberofrows; ?></h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                     <a href="dashboard.php?page=2"> Totall number of cadet registered. </a>
                    </div>
                  </div>
                </div>
              </div>

                    <?php 
                             $sql_prepare = 'SELECT fid FROM enrollment';
                                            $stmt = $con->prepare($sql_prepare); 
                                           // $stmt->bind_param('i',$_GET['event']);
                                            $stmt->execute();
                                            $stmt->bind_result($fid);
                                            $stmt->store_result();
                                            $numberofrows = $stmt->num_rows;
                                            $stmt->fetch();
                                             $stmt->close();

                        
                        ?> 
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="fas fa-book"></i>
                    </div>
                    <p class="card-category">Enrollments</p>
                    <h3 class="card-title"><?php echo $numberofrows; ?></h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">assignment</i> Totall number of enrollment requests.
                    </div>
                  </div>
                </div>
              </div>

              <?php 
                             $sql_prepare = 'SELECT cid,cdate FROM contact ORDER BY cid DESC LIMIT 1';
                                            $stmt = $con->prepare($sql_prepare); 
                                           // $stmt->bind_param('i',$_GET['event']);
                                            $stmt->execute();
                                            $stmt->bind_result($cid,$cdate);
                                            $stmt->store_result();
                                            $numberofrows = $stmt->num_rows;
                                            $stmt->fetch(); $json= $arrayName = array('cdate' =>$cdate);
                                            $stmt->close();

                        
                        ?> 
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="fas fa-headset"></i>
                    </div>
                    <p class="card-category">Messages</p>
                    <h3 class="card-title"><?php echo $numberofrows; ?></h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats"><i class="material-icons">date_range</i> 
                     <a href="dashboard.php?page=10"> 
                      <?php
                      $time = strtotime($json['cdate']);
                      echo 'Last record '.humanTiming($time).' ago';
                       
                       ?></a>
                    </div>
                  </div>
                </div>
              </div>
               <?php 
                             $sql_prepare = 'SELECT fid FROM feedback';
                                            $stmt = $con->prepare($sql_prepare); 
                                           // $stmt->bind_param('i',$_GET['event']);
                                            $stmt->execute();
                                            $stmt->bind_result($cid);
                                            $stmt->store_result();
                                            $numberofrows = $stmt->num_rows;
                                            $stmt->fetch();
                                             $stmt->close();

                        
                        ?> 
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                      <i class="fas fa-comment-alt"></i>
                    </div>
                    <p class="card-category">Feedback</p>
                    <h3 class="card-title"><?php echo $numberofrows; ?></h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                     <a href="dashboard.php?page=11"> Totall number of feedback received.</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <h3>Newly added events</h3>
            <br>
            <div class="row">
             <?php 
                             $sql_prepare = 'SELECT eid,title,description,img,cdate FROM events ORDER BY eid DESC LIMIT 3';
                                            $stmt = $con->prepare($sql_prepare); 
                                           // $stmt->bind_param('i',$_GET['event']);
                                            $stmt->execute();
                                            $stmt->bind_result($eid,$title,$description,$img,$cdate);
                                            $stmt->store_result();
                                            //$numberofrows = $stmt->num_rows;
         while($stmt->fetch())
        {

            $jsons = array('eid'=>$eid,'title'=>$title,'description'=>$description,'img'=>$img,'cdate'=>$cdate);

                        
                        ?> 

              <div class="col-md-4">
                <div class="card card-product">
                  <div class="card-header card-header-image" data-header-animation="true">
                    <a href="#">
                      <img class="img" src="../assets/image/uploads/events/<?php echo $jsons['img']; ?>" style="height: 264px;width: 352px;">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="card-actions text-center">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <a href="../index.php?page=12&event=<?php echo $jsons['eid']; ?>" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                        <i class="material-icons">art_track</i>
                      </a>
                      <a href="dashboard.php?page=5&sub_page=0005&eventid=<?php echo $jsons['eid']; ?>" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                        <i class="material-icons">edit</i>
                      </a>
                      <a  onclick="return confirm('Are you sure you want to delete this event?');" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                        <i class="material-icons">close</i>
                      </a>
                    </div>
                    <h4 class="card-title">
                      <a href="#">
                        <?php 
                                    // strip tags to avoid breaking any html
                                                                          $string = strip_tags($jsons['title']);
                                                                          if (strlen($string) > 20) {

                                                                              // truncate string
                                                                              $stringCut = substr($string, 0, 20);
                                                                              $endPoint = strrpos($stringCut, ' ');

                                                                              //if the string doesn't contain any space then it will cut without word basis.
                                                                              $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                                              $string .= "... <a href='index.php?page=12&event=".$jsons['eid']."'>Read More</a>";
                                                                          }
                                                                          echo $string;



                        ?>
                      </a>
                    </h4>
                    <div class="card-description">
                      <?php 
                                                                          // strip tags to avoid breaking any html
                                                                          $string = strip_tags($jsons['description']);
                                                                          if (strlen($string) > 120) {

                                                                              // truncate string
                                                                              $stringCut = substr($string, 0, 120);
                                                                              $endPoint = strrpos($stringCut, ' ');

                                                                              //if the string doesn't contain any space then it will cut without word basis.
                                                                              $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                                              $string .= "... <a href='index.php?page=12&event=".$jsons['eid']."'>Read More</a>";
                                                                          }
                                                                          echo $string;



                           ?>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="price">
                      <h4> <i class="far fa-clock" ></i> <?php
                      $time = strtotime($jsons['cdate']);
                      echo humanTiming($time).' ago';
                       
                       ?></h4>
                    </div>
                    
                  </div>
                </div>
              </div>
             <?php
           }?>

          
        
            </div>