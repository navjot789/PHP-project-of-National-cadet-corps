 <div class="contact-page sidebar-collapse">
 <div class="main">
    <div class="section section-gray" style="min-height: 790px;">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title"><i class="fas fa-bell" style="font-size: 48px;"></i> Exam New Notifications</h2>
            <p>Information provided by admin such as datesheet, Notice board, exam pattern or syllabus will be post here. You can download the info in respected formats.</p>
            <hr>
          </div>
        </div>
     
        <div class="row">
          <div class="col-md-12 text-center">
          
            <div class="table-responsive">
              <table class="table table-bordered" style="border-radius: 5px; ">
               
                  <thead class="bg-default">
                    <tr >
                       <th scope="col">Date</th>
                      <th scope="col">Comment</th>
                      <th scope="col">Access Option</th>
                    
                    </tr>
                  </thead>
                  <tbody>

                     <?php 
                             $sql_prepare = 'SELECT comment,pdf,link,cdate FROM exam ORDER BY ex_id DESC';
                                            $stmt = $con->prepare($sql_prepare); 
                                           // $stmt->bind_param('i',$_GET['event']);
                                            $stmt->execute();
                                            $stmt->bind_result($comment,$pdf,$link,$cdate);
                                           
                                           $jsons = array();
                                                   
                         while($stmt->fetch())
                         {
                           $jsons = array('comment'=>$comment,'pdf'=>$pdf,'link'=>$link,'cdate'=>$cdate);
                      ?> 
                        <tr>

                          <td ><?php
                                 
                                   $timestamp = $jsons['cdate'];
                                    echo date("F jS, Y", strtotime($timestamp));
                           ?></td>

                          <td ><img src="assets/new.gif"><?php echo $jsons['comment']; ?></td>

                         <td>
                            <?php
                               if($jsons['pdf'] !=='' && $jsons['link'] =='') //if pdf not empty but link empty
                               {
                            ?>
                              
                                <a href="assets\image\uploads\pdf\<?php echo $jsons['pdf']; ?>" class="btn btn-success" download>
                                  <i class="fas fa-download" ></i> Download
                                </a>
                             
                              <?php
                               }else if($jsons['link'] !=='' && $jsons['pdf'] =='') //if link not empty but pdf empty
                               {
                                ?>
                                   <a href="<?php echo $jsons['link']; ?>" target="_blank" class="btn btn-success">
                                   <i class="fas fa-link" ></i> link
                                  </a>
                                 
                                <?php
                               }else if($jsons['link'] !=='' && $jsons['pdf'] !=='') //if both not empty
                               {
                                ?> <a href="assets\image\uploads\pdf\<?php echo $jsons['pdf']; ?>" class="btn btn-success" download>
                                    <i class="fas fa-download" ></i> Download
                                  </a>
                             
                                   <a href="<?php echo $jsons['link']; ?>" target="_blank" class="btn btn-success">
                                   <i class="fas fa-link" ></i> link
                                  </a>
                                 
                                <?php
                               }
                               else if($jsons['link'] =='' && $jsons['pdf'] =='') //if both not empty
                               {
                                ?> 
                                   <button href="#"  class="btn btn-default" disabled="">
                                    Access Denied
                                  </button>
                                 
                                <?php
                               }
                                ?>    
                             </td>

                          
                        </tr>
                     <?php
                        } $stmt->close();?>
                  </tbody>
                </table>
              </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>