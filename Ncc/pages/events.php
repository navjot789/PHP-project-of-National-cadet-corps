 <div class="section secion-blog cd-section" id="events">
<!--     *********     BLOGS 1      *********      -->

    <!--     *********     BLOGS 2      *********      -->
    <div class="blog-2 section ">
      <div class="container">
        <div class="row">
          <div class="col-md-10 ml-auto mr-auto">
            <h2 class="title">Latest Events</h2>
            <br />
            <div class="row">
<?php
$sql_prepares = 'SELECT eid,title,description,img,cdate FROM events';
              $stmts = $con->prepare($sql_prepares); 
              $stmts->bind_result($eid,$title,$description,$img,$cdate);
              $stmts->execute();
              $stmts->store_result();
              $jsons = array();
              


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





                          
  while($stmts->fetch())
  {

   $jsons = array('eid'=>$eid,'title'=>$title,'description'=>$description,'img'=>$img,'cdate'=>$cdate);
?>

              <div class="col-md-4" style="margin-bottom: 20px;">
                <div class="card card-blog">
                  <div class="card-image">
                    <a href="index.php?page=12&event=<?php echo $jsons['eid']?>">
                      <img class="img img-raised" src="assets/image/uploads/events/<?php echo $jsons['img']; ?>" style="height:191px ;width: 286px;"/>
                    </a>
                  </div>
                  <div class="card-body">
                   
                    <h5 class="card-title">
                      <a href="index.php?page=12&event=<?php echo $jsons['eid']?>">
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



                           
                       


                        ?></a>
                    </h5>
                    <p class="card-description">
                     <?php 
                                                                          // strip tags to avoid breaking any html
                                                                          $string = strip_tags($jsons['description']);
                                                                          if (strlen($string) > 50) {

                                                                              // truncate string
                                                                              $stringCut = substr($string, 0, 50);
                                                                              $endPoint = strrpos($stringCut, ' ');

                                                                              //if the string doesn't contain any space then it will cut without word basis.
                                                                              $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                                              $string .= "... <a href='index.php?page=12&event=".$jsons['eid']."'>Read More</a>";
                                                                          }
                                                                          echo $string;



                           ?>
                      <br/>
                    </p>
                    <hr>
                    <div class="card-footer ">
                      
                      <div class="stats">
                        <i class="fa fa-clock-o" aria-hidden="true"></i> 

                        <?php 
                            $time = strtotime($jsons['cdate']);
                            echo 'Posted '.humanTiming($time).' ago';

                        //echo  $newDate = date("F d Y", strtotime($jsons['cdate']));

                         ?>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
<?php
}?>
           
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--     *********    END BLOGS 2      *********      -->
 
 </div>
 