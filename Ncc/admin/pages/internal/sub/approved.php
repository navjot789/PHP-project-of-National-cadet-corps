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
                  <h4 class="card-title"> Approved Enrollment Requests</h4>
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
                          <th>CadetID</th>
                          <th>Status</th>
                         
                          <th>Profile Image</th>
                         <th>Applied on</th>
                      
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>

                      <tfoot>
                        <tr>
                          <th>FormID</th>
                          <th>CadetID</th>
                          <th>Status</th>
                         
                          <th>Profile Image</th>
                        <th>Applied on</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </tfoot>

                      <tbody>


                        <?php 
                             $status = 1;
                             $sql_prepare = 'SELECT fid,cid,status,c_img,cdate FROM enrollment WHERE status = ?';
                                            $stmt = $con->prepare($sql_prepare); 
                                            $stmt->bind_param('i',$status);
                                            $stmt->execute();
                                            $stmt->bind_result($fid,$cid,$status,$c_img,$cdate);
                                            $stmt->store_result();
                                            $numberofrows = $stmt->num_rows;
                                           

                                           $jsons = array();
                                                   
                         while($stmt->fetch())
                         {
                           $jsons = array('fid'=>$fid,'cid'=>$cid,'status'=>$status,'c_img'=>$c_img,'cdate'=>$cdate);
                      ?> 

                        <tr>
                           <td><?php echo $jsons['fid'];?></td>
                           <td><?php 

                                  
                                echo $jsons['cid'];



                           ?></td>

                           <td><?php 
                           

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
				                   
				                    


				                 

                           ?></td>

                          
                            <td><img class="img-fluid img-thumbnail" style="height:60px;width: :80px;" src="../assets/image/uploads/<?php echo $jsons['c_img'];?>"/></td>
                            <td><?php echo $jsons['cdate'];?></td>

                         <td class="td-actions text-right">
                             <a href="dashboard.php?page=7&sub_page=0007&cadetid=<?php echo $jsons['cid'];?>" class="btn btn-info" >
                              <i class="fas fa-edit"></i>
                            </a>
                           
                           <a  href="sql/delete.php?del_a_enroll=<?php echo $jsons['fid'];?>&return_url=<?php echo $_GET['page'];?>" onclick="return confirm('Are you sure you want to delete this EnrollmentID?');" rel="tooltip" class="btn btn-danger">
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