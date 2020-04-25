<?php
// Check if the user is already logged in, if yes then redirect him to MYPROFILE page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
   


                                      $sql_prepare = 'SELECT status,cdate FROM enrollment WHERE cid = ?';
                                            $stmt = $con->prepare($sql_prepare); 
                                            $stmt->bind_param('i',$_SESSION["cid"]);
                                            $stmt->execute();
                                            $stmt->bind_result($status,$cdate);
                                            $stmt->store_result();
                                            $numberofrows = $stmt->num_rows;
                                            $stmt->fetch();

                                          $json = array();
                                                      
                                            $json = array('status'=>$status,'cdate'=>$cdate); 
                                            $stmt->close();

?>

<div class="add-product sidebar-collapse" >
<div class="main">
    
      <div class="container" >
        <h2 class="title">My Attendance</h2>
        <div>
        
          <div class="row">


            <div class="col-md-12 col-sm-12" >
     
         <div class="table-responsive" >
       <table id="example" class="table">
                <thead class="thead-dark">
                  <tr>
                  <th>AttendanceID</th>
                          <th>date</th>
                          <th>Mark As</th>
                  </tr>
                </thead>
                <tbody>

                        <?php 
                             $sql_prepare = "select attend_id,cid,stats,cdate from attendance where cid=?;";
                                            $stmt = $con->prepare($sql_prepare); 
                                            $stmt->bind_param('i',$_SESSION['cid']);
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
<?php
}else
{
   header("location: index.php?page=6");
    exit();
}?>