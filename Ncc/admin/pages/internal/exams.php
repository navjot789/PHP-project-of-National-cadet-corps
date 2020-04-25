<div class="row">

  
              <?php
                    include "sql/display_msg.php"; //siplay error or success messages.
              ?>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <h4 class="card-title"> Exam List & links</h4>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                        
                          <th>ExamID</th>
                          <th>Info</th>
                          <th>PDF | Link</th>
                          <th>Create</th>
                      
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>

                      <tfoot>
                        <tr>
                          <th>ExamID</th>
                          <th>Info</th>
                          <th>PDF | Link</th>
                          <th>Create</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </tfoot>

                      <tbody>


                        <?php 
                             $sql_prepare = 'SELECT ex_id,comment,pdf,link,cdate FROM exam ORDER BY ex_id DESC';
                                            $stmt = $con->prepare($sql_prepare); 
                                           // $stmt->bind_param('i',$_GET['event']);
                                            $stmt->execute();
                                            $stmt->bind_result($ex_id,$comment,$pdf,$link,$cdate);
                                            $stmt->store_result();
                                            $numberofrows = $stmt->num_rows;
                                           

                                           $jsons = array();
                                                   
                         while($stmt->fetch())
                         {
                           $jsons = array('ex_id'=>$ex_id,'comment'=>$comment,'pdf'=>$pdf,'link'=>$link,'cdate'=>$cdate);
                      ?> 

                        <tr>
                           <td><?php echo $jsons['ex_id'];?></td>
                           <td><?php 

                                  echo $jsons['comment'];
                               


                           ?></td>

                              <td>
                            <?php
                               if($jsons['pdf'] !=='' && $jsons['link'] =='') //if pdf not empty but link empty
                               {
                            ?>
                              
                                <a href="assets\image\uploads\pdf\<?php echo $jsons['pdf']; ?>" class="btn btn-success" >
                                  <i class="fas fa-download" ></i> Download
                                </a>
                             
                              <?php
                               }else if($jsons['link'] !=='' && $jsons['pdf'] =='') //if link not empty but pdf empty
                               {
                                ?>
                                   <a href="<?php echo $jsons['link']; ?>" target="_blank" class="btn btn-success" >
                                   <i class="fas fa-link" ></i> link
                                  </a>
                                 
                                <?php
                               }else if($jsons['link'] !=='' && $jsons['pdf'] !=='') //if both not empty
                               {
                                ?> <a href="assets\image\uploads\pdf\<?php echo $jsons['pdf']; ?>" class="btn btn-success" >
                                    <i class="fas fa-download" ></i> Download
                                  </a>
                             
                                   <a href="<?php echo $jsons['link']; ?>" target="_blank" class="btn btn-success" >
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
                        
                            <td><?php echo $jsons['cdate'];?></td>

                         <td class="td-actions text-right">

                              <a  href="sql/delete.php?del_ex_id=<?php echo $jsons['ex_id'];?>&return_url=<?php echo $_GET['page'];?>" onclick="return confirm('Are you sure you want to delete Noti?');" rel="tooltip" class="btn btn-danger">
                              <i class="material-icons">close</i>
                            </a>
                          </td>

                        </tr>
                    
                          <?php
                        } $stmt->close();?>

                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- end content-->
              </div>
              <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
          </div>
          <!-- end row -->