<div class="col-md-12">
      <?php
                    include "sql/display_msg.php"; //siplay error or success messages.
              ?>
    <p id="att_response"></p>

              <div class="card ">
                <div class="card-header card-header-primary card-header-text">
                  <div class="card-text">
                    <h4 class="card-title">Mark Cadet Attendance</h4>
                  </div>
                </div>


                <div class="card-body ">
                  <form id="att_form" method="post" class="form-horizontal">
                 
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Date</label>
                      <div class="col-sm-10">
                        <div class="form-group bmd-form-group">
                          <input type="date" class="form-control" name="cdate" id="cdate">
                        </div>
                      </div>
                    </div>
                      

                    <div class="row">
                      <label class="col-sm-2 col-form-label">Cadet Name</label>
                      <div class="col-sm-10">
                        <div class="form-group bmd-form-group">
                          <div class="dropdown bootstrap-select">
                            <select class="selectpicker" name="cadet" id="cadet" data-style="btn btn-primary btn-round"  >
                            <option selected="" disabled="" value=" ">...Select Cadet...</option>
                        <?php 
                             $sql_prepare = 'SELECT cid,fname,lname FROM cadet';
                                            $stmt = $con->prepare($sql_prepare); 
                                           // $stmt->bind_param('i',$_GET['event']);
                                            $stmt->execute();
                                            $stmt->bind_result($cid,$fname,$lname);
                                            $stmt->store_result();
                                            
                                           $jsons = array();
                                                   
                         while($stmt->fetch())
                         {
                           $jsons = array('cid'=>$cid,'fname'=>$fname,'lname'=>$lname);
                      ?> 
                              <option value="<?php echo $jsons['cid']; ?>"><?php echo $jsons['fname'].' '.$jsons['lname']; ?></option>
                        <?php
                        }$stmt->close();?>

                          </select>
                        </div>
                        </div>
                      </div>
                    </div>
                   
                 
                 
                    <div class="row">
                      <label class="col-sm-2 col-form-label label-checkbox">Mark as</label>
                      <div class="col-sm-10 checkbox-radios">
                        <div class="form-check form-check-inline">

                          <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="mark" id="mark" value="1" checked=""> Present
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>

                        </div>

                        <div class="form-check form-check-inline">
                          
                            <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="mark" id="mark" value="0" > Late
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>

                        </div>

                        <div class="form-check form-check-inline">

                           <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="mark" id="mark" value="2" > Absent
                            <span class="circle">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>

                        </div>

                        <div class="card-footer text-right">
                          <div class="form-check mr-auto">
                          </div>
                          <button type="submit" class="btn btn-success" name="at_btn" id="at_btn">Submit</button>
                        </div>

                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>





            <div class="col-md-12">

              <div class="card ">
                <div class="card-header card-header-primary card-header-text">
                  <div class="card-text">
                    <h4 class="card-title">Report Attendance</h4>
                  </div>
                </div>


                <div class="card-body ">
                  <form  method="post" action="" class="form-horizontal">


                          <div class="row">
                              <label class="col-sm-2 col-form-label">Cadet Name</label>
                              <div class="col-sm-10">
                                <div class="form-group bmd-form-group">
                                  <div class="dropdown bootstrap-select">
                                    <select class="selectpicker" name="cadet_id"  data-style="btn btn-primary btn-round"  >
                                    <option selected="" disabled="" value=" ">...Select Cadet...</option>
                                <?php 
                                     $sql_prepare = 'SELECT cid,fname,lname FROM cadet';
                                                    $stmt = $con->prepare($sql_prepare); 
                                                   // $stmt->bind_param('i',$_GET['event']);
                                                    $stmt->execute();
                                                    $stmt->bind_result($cid,$fname,$lname);
                                                    $stmt->store_result();
                                                    
                                                   $jsons = array();
                                                           
                                 while($stmt->fetch())
                                 {
                                   $jsons = array('cid'=>$cid,'fname'=>$fname,'lname'=>$lname);
                              ?> 
                                      <option value="<?php echo $jsons['cid']; ?>"><?php echo $jsons['fname'].' '.$jsons['lname']; ?></option>
                                <?php
                                }?>

                                  </select>
                                </div>
                                </div>
                              </div>
                            </div>
                 
                          <div class="row">
                            <label class="col-sm-2 col-form-label">From Date</label>
                            <div class="col-sm-10">
                              <div class="form-group bmd-form-group">
                                <input type="date" class="form-control" name="cdate_from" >
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <label class="col-sm-2 col-form-label">To Date</label>
                            <div class="col-sm-10">
                              <div class="form-group bmd-form-group">
                                <input type="date" class="form-control" name="cdate_to" >
                              </div>
                            </div>
                          </div>

                            <div class="card-footer text-right">
                          <div class="form-check mr-auto">
                          </div>
                          <button type="submit" class="btn btn-success" name="at_sch" >Search</button>
                        </div>
                            

             
                  </form>
                </div>
              </div>
            </div>


          <?php
          
                if(isset($_POST['cadet_id']) && isset($_POST['cdate_from']) && isset($_POST['cdate_to']) )
                {

         ?>

            <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <h4 class="card-title">Attendance Report for 
                    <b>#<?php echo $_POST['cadet_id']; ?></b> 
                    from <b><?php echo $_POST['cdate_from']; ?></b> 
                    to <b><?php echo $_POST['cdate_to']; ?></b></h4>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                    <table id="report_datatable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                          <th>AttendanceID</th>
                          <th>date</th>
                          <th>Mark As</th>

                      
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>

                      <tfoot>
                        <tr>
                            <th>AttendanceID</th>
                          <th>date</th>
                          <th>Mark As</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </tfoot>

                      <tbody>


                        <?php 
                             $sql_prepare = "select attend_id,cid,stats,cdate from attendance where cdate between '".$_POST['cdate_from']."' and '".$_POST['cdate_to']."' and cid=?;";
                                            $stmt = $con->prepare($sql_prepare); 
                                            $stmt->bind_param('i',$_POST['cadet_id']);
                                            $stmt->execute();
                                            $stmt->bind_result($attend_id,$cid,$stats,$cdate);
                                            $stmt->store_result();
                                            $numberofrows = $stmt->num_rows;
                                           

                                           $jsons = array();
                                                   
                         while($stmt->fetch())
                         {
                           $jsons = array('attend_id'=>$attend_id,'cid'=>$cid,'stats'=>$stats,'cdate'=>$cdate);
                      ?> 

                        <tr>
                           <td><?php echo $jsons['attend_id'];?></td>
                           <td><?php

                                   $date = strtotime($jsons['cdate']); 
                                   echo date('d/M/Y', $date);
                      
                           ?></td>
                          
                          <td><?php 
                                  if($jsons['stats']==0)
                                  {
                                      echo '<button class="btn btn-warning btn-sm" disabled>Late<div class="ripple-container"></div></button>';
                                  }else if($jsons['stats']==1)
                                  {
                                      echo '<button class="btn btn-success btn-sm" disabled>Present<div class="ripple-container"></div></button>';
                                  }else
                                  {
                                     echo '<button class="btn btn-danger btn-sm" disabled>Absent<div class="ripple-container"></div></button>';
                                  }

                                ?></td>

                         <td class="td-actions text-right">
                          
                           
                              <a  href="sql/delete.php?del_attend=<?php echo $jsons['attend_id'];?>&return_url=<?php echo $_GET['page'];?>" onclick="return confirm('Are you sure you want to delete this AttendanceID?');" rel="tooltip" class="btn btn-danger">
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

          <?php
        }
        ?>



