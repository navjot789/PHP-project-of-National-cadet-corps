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
                  <h4 class="card-title">Enrolled Events</h4>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>AssignID</th>
                          <th>EventID</th>
                          <th>CadetID</th>
                          
                          <th>Create</th>
                      
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>

                      <tfoot>
                        <tr>
                          <th>AssignID</th>
                          <th>EventID</th>
                          <th>CadetID</th>
                         
                          <th>Create</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </tfoot>

                      <tbody>


                        <?php 
                             $sql_prepare = 'SELECT a_id,eid,cid,cdate FROM assign_events';
                                            $stmt = $con->prepare($sql_prepare); 
                                           // $stmt->bind_param('i',$_GET['event']);
                                            $stmt->execute();
                                            $stmt->bind_result($a_id,$eid,$cid,$cdate);
                                            $stmt->store_result();
                                            $numberofrows = $stmt->num_rows;
                                           

                                           $jsons = array();
                                                   
                         while($stmt->fetch())
                         {
                           $jsons = array('a_id'=>$a_id,'eid'=>$eid,'cid'=>$cid,'cdate'=>$cdate);
                      ?> 

                        <tr>
                           <td><?php echo $jsons['a_id'];?></td>
                           <td><?php echo $jsons['eid'];?></td>
                           <td><?php echo $jsons['cid'];?></td>
                          <td><?php echo $jsons['cdate'];?></td>

                         <td class="td-actions text-right">
                            <a href="../index.php?page=12&event=<?php echo $jsons['eid']; ?>" target="_blank" type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="">
                              <i class="fas fa-eye"></i>
                            </a>
                           
                            
                            <a  href="sql/delete.php?del_enrolled=<?php echo $jsons['a_id'];?>&return_url=<?php echo $_GET['page'];?>" onclick="return confirm('Are you sure you want to delete this Assign Event?');" rel="tooltip" class="btn btn-danger">
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