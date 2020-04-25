  


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
                  <h4 class="card-title">Registered Cadets</h4>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>CadetID</th>
                          <th>Fname</th>
                          <th>Lname</th>
                          <th>Gender</th>
                          <th>Phone</th>
                          <th>DOB</th>
                          <th>Email</th>
                          <th>Create</th>
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>

                      <tfoot>
                        <tr>
                          <th>CadetID</th>
                          <th>Fname</th>
                          <th>Lname</th>
                          <th>Gender</th>
                          <th>Phone</th>
                          <th>DOB</th>
                          <th>Email</th>
                          <th>Create</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </tfoot>

                      <tbody>


                        <?php 
                             $sql_prepare = 'SELECT cid,fname,lname,gender,phone,dob,email,cdate FROM cadet';
                                            $stmt = $con->prepare($sql_prepare); 
                                           // $stmt->bind_param('i',$_GET['event']);
                                            $stmt->execute();
                                            $stmt->bind_result($cid,$fname,$lname,$gender,$phone,$dob,$email,$cdate);
                                            $stmt->store_result();
                                            $numberofrows = $stmt->num_rows;
                                           

                                           $jsons = array();
                                                   
                         while($stmt->fetch())
                         {
                           $jsons = array('cid'=>$cid,'fname'=>$fname,'lname'=>$lname,'gender'=>$gender,'phone'=>$phone,'dob'=>$dob,'email'=>$email,'cdate'=>$cdate);
                      ?> 

                        <tr>
                           <td><?php echo $jsons['cid'];?></td>
                           <td><?php echo $jsons['fname'];?></td>
                           <td><?php echo $jsons['lname'];?></td>
                           <td><?php echo $jsons['gender'];?></td>
                           <td><?php echo $jsons['phone'];?></td>
                           <td><?php echo $jsons['dob'];?></td>
                           <td><?php echo $jsons['email'];?></td>
                           <td><?php echo $jsons['cdate'];?></td>

                         <td class="td-actions text-right">
                       
                            
                            <a  href="sql/delete.php?del_cadet=<?php echo $jsons['cid'];?>&return_url=<?php echo $_GET['page'];?>" onclick="return confirm('Are you sure you want to delete this Cadet? All the infomation associated with this Cadet will be delete too. Still sure about it?');" rel="tooltip" class="btn btn-danger">
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