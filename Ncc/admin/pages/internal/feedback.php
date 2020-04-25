
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
                  <h4 class="card-title"> Feedback List</h4>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                        
                          <th>FormID</th>
                          <th>Name</th>
                          <th>Email</th>
                           <th>Subject</th>
                         
                          <th>Message</th>
                          <th>Feedback on</th>
                      
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>

                      <tfoot>
                        <tr>
                          <th>ContactID</th>
                          <th>Name</th>
                          <th>Email</th>
                         <th>Subject</th>
                          <th>Message</th>
                          <th>Feedback on</th>
                      
                          
                          <th class="text-right">Actions</th>
                        </tr>
                      </tfoot>

                      <tbody>


                        <?php 
                             $status = 0;
                             $sql_prepare = 'SELECT fid,name,email,sub,message,cdate FROM feedback';
                                            $stmt = $con->prepare($sql_prepare); 
                                            //$stmt->bind_param('i',$status);
                                            $stmt->execute();
                                            $stmt->bind_result($fid,$name,$email,$sub,$message,$cdate);
                                            $stmt->store_result();
                                            $numberofrows = $stmt->num_rows;
                                           

                                           $jsons = array();
                                                   
                         while($stmt->fetch())
                         {
                           $jsons = array('fid'=>$fid,'name'=>$name,'email'=>$email,'sub'=>$sub,'message'=>$message,'cdate'=>$cdate);
                      ?> 

                        <tr>
                           <td><?php echo $jsons['fid'];?></td>
                           <td><?php 
     
                                echo $jsons['name'];

                           ?></td>

                           <td><?php 
                           
                                    echo $jsons['email'];
                           ?></td>
                            <td><?php echo $jsons['sub'];?></td>
                           
                               <td><?php 

                                       echo $jsons['message'];
                                       
                                  
                            ?></td>
                            <td><?php echo $jsons['cdate'];?></td>
                          

                         <td class="td-actions text-right">
                           
                           
                            <a  href="sql/delete.php?del_feedback=<?php echo $jsons['fid'];?>&return_url=<?php echo $_GET['page'];?>" onclick="return confirm('Are you sure you want to delete this feedback?');" rel="tooltip" class="btn btn-danger">
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