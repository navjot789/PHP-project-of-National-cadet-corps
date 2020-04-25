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
                  <h4 class="card-title"> Events List</h4>
                </div>
                <div class="card-body">
                  <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                  </div>
                  <div class="material-datatables">
                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                      <thead>
                        <tr>
                        
                          <th>EventID</th>
                          <th>Title</th>
                          <th>Sub Title</th>
                          <th>Description</th>
                          <th>Image</th>
                          <th>Create</th>
                      
                          <th class="disabled-sorting text-right">Actions</th>
                        </tr>
                      </thead>

                      <tfoot>
                        <tr>
                        <th>EventID</th>
                          <th>Title</th>
                          <th>Sub Title</th>
                          <th>Description</th>
                          <th>Image</th>
                          <th>Create</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </tfoot>

                      <tbody>


                        <?php 
                             $sql_prepare = 'SELECT eid,title,sub_title,description,img,cdate FROM events';
                                            $stmt = $con->prepare($sql_prepare); 
                                           // $stmt->bind_param('i',$_GET['event']);
                                            $stmt->execute();
                                            $stmt->bind_result($eid,$title,$sub_title,$description,$img,$cdate);
                                            $stmt->store_result();
                                            $numberofrows = $stmt->num_rows;
                                           

                                           $jsons = array();
                                                   
                         while($stmt->fetch())
                         {
                           $jsons = array('eid'=>$eid,'title'=>$title,'sub_title'=>$sub_title,'description'=>$description,'img'=>$img,'cdate'=>$cdate);
                      ?> 

                        <tr>
                           <td><?php echo $jsons['eid'];?></td>
                           <td><?php 

                                  
                                    // strip tags to avoid breaking any html
                                    $string = strip_tags($jsons['title']);
                                    if (strlen($string) > 20) {

                                        // truncate string
                                        $stringCut = substr($string, 0, 20);
                                        $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                         $string .= "... <b><a href='../index.php?page=12&event=".$jsons['eid']."'>Read More</a></b>";
                                    }
                                    echo $string;



                           ?></td>

                           <td><?php 
                             // strip tags to avoid breaking any html
                                    $string = strip_tags($jsons['sub_title']);
                                    if (strlen($string) > 20) {

                                        // truncate string
                                        $stringCut = substr($string, 0, 20);
                                        $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $string .= "... <b><a href='../index.php?page=12&event=".$jsons['eid']."'>Read More</a></b>";
                                    }
                                    echo $string;
                           

                           ?></td>

                            <td><?php 

                       
                                        // strip tags to avoid breaking any html
                                    $string = strip_tags($jsons['description']);
                                    if (strlen($string) > 40) {

                                        // truncate string
                                        $stringCut = substr($string, 0, 40);
                                        $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $string .= "... <b><a href='../index.php?page=12&event=".$jsons['eid']."'>Read More</a></b>";
                                    }
                                    echo $string;
                            ?></td>
                            <td><img class="img-fluid img-thumbnail" style="height:60px;width: :80px;" src="../assets/image/uploads/events/<?php echo $jsons['img'];?>"/></td>
                            <td><?php echo $jsons['cdate'];?></td>

                         <td class="td-actions text-right">

                           <a href="../index.php?page=12&event=<?php echo $jsons['eid'];?>" class="btn btn-info" target="_blank">
                              <i class="fas fa-eye"></i>
                            </a>

                          <a href="dashboard.php?page=5&sub_page=0005&eventid=<?php echo $jsons['eid'];?>"  class="btn btn-info" >
                              <i class="fas fa-edit"></i>
                            </a>
                           
                          
                              <a  href="sql/delete.php?del_eid=<?php echo $jsons['eid'];?>&return_url=<?php echo $_GET['page'];?>" onclick="return confirm('Are you sure you want to delete this Event?');" rel="tooltip" class="btn btn-danger">
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