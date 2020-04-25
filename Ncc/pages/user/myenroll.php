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

<div class="add-product sidebar-collapse">
<div class="main">
    <div class="section">
      <div class="container">
        <h2 class="title">My Enrollments</h2>
        <div>
        
          <div class="row">


            <div class="col-md-12 col-sm-12">
     
            <?php 
            if($numberofrows <= 0)
            {
                
            ?>

                     <h1 class="title"> &nbsp;404
                              <br>
                              <p class="error-msg">Seems like you haven't submit an application yet.</p>
                              <small><a href="index.php?page=2">Click here!</a> to submit new application.</small>
                            </h1>

<?php
}else if($json['status'] == 0 && $json['status'] !=='') //pending
{
  ?>

    <div class="col-md-10 ml-auto mr-auto">
                             
                              <br>
                              <div class="card card-plain card-blog">
                                <div class="row">
                                
                                  <div class="col-md-12">
                                    <div class="card-body">
                                      <h3 class="card-title text-warning">
                                         <i class="fas fa-clock "></i> <a href="#">Application under review</a>
                                      </h3>
                                      <p class="card-description">
                                        Your application is successfully submitted and now under review. Once cleared you are ready to enroll. 
                                        
                                      </p>
                                      <p class="author">
                                        Applied on
                                       , <?php
                   
                                         echo  $newDate = date("F d Y", strtotime($json['cdate']));

                                        ?>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                  </div>

<?php
}else if($json['status'] == 2 && $json['status'] !=='') //rejected
{
  ?>

<div class="col-md-10 ml-auto mr-auto">
                             
                              <br>
                              <div class="card card-plain card-blog">
                                <div class="row">
                                
                                  <div class="col-md-12">
                                    <div class="card-body">
                                      <h3 class="card-title text-danger">
                                         <i class="fas fa-times-circle"></i> <a href="#">Application Rejected</a>
                                      </h3>
                                      <p class="card-description">
                                        Your application is rejected due to ineligibility. Re apply again. 
                                        
                                      </p>
                                      <p class="author">
                                        Applied on
                                       , <?php
                   
                                         echo  $newDate = date("F d Y", strtotime($json['cdate']));

                                        ?>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                  </div>



 <?php 
}
else{
  

$sql_prepare = 'SELECT eid,cdate FROM assign_events WHERE cid = ?'; 
        $stmt = $con->prepare($sql_prepare); 
        $stmt->bind_param('i',$_SESSION["cid"]);
        $stmt->execute();
        $stmt->bind_result($enid,$cdate);
        $stmt->store_result();
        $rows = $stmt->num_rows;
        $exist = array();


if($rows > 0)
{

        while ($stmt->fetch()) {

            $exist = array('enid'=>$enid,'cdate'=>$cdate);
         
         // echo $exist['enid']."</br>";

             
              $sql_prepares = 'SELECT eid,title,description,img,cdate FROM events WHERE eid = ?';
              $stmts = $con->prepare($sql_prepares); 
              $stmts->bind_param('i',$exist['enid']);
              $stmts->bind_result($eid,$title,$description,$img,$cdate);
     
              $stmts->execute();
              $stmts->store_result();
              $jsons = array();


                          
                                        while($stmts->fetch())
                                        {

                                         $jsons = array('eid'=>$eid,'title'=>$title,'description'=>$description,'img'=>$img);

                                          ?> 


                                              <div class="row">
                                                        <div class="col-md-12">
                                             
                                                              <br>
                                                                <div class="card card-plain card-blog">
                                                                  <div class="row">
                                                                    <div class="col-md-4">
                                                                      <div class="card-image">
                                                                        <img class="img" src="assets/image/uploads/events/<?php echo $jsons['img'];?>">
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                      <div class="card-body">
                                                                      
                                                                        <h3 class="card-title">
                                                                          <a href="index.php?page=12&event=<?php echo $jsons['eid']?>"><?php echo $jsons['title'];?></a>
                                                                        </h3>
                                                                        <p class="card-description">
                                                                          <?php 
                                                                          // strip tags to avoid breaking any html
                                                                          $string = strip_tags($jsons['description']);
                                                                          if (strlen($string) > 200) {

                                                                              // truncate string
                                                                              $stringCut = substr($string, 0, 200);
                                                                              $endPoint = strrpos($stringCut, ' ');

                                                                              //if the string doesn't contain any space then it will cut without word basis.
                                                                              $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                                              $string .= "... <a href='index.php?page=12&event=".$jsons['eid']."'>Read More</a>";
                                                                          }
                                                                          echo $string;



                                                                          ?>
                                                                         
                                                                        </p>
                                                                        <p class="author">
                                                                         on  <?php   echo  $newDate = date("F d Y", strtotime($exist['cdate']));?>
                                                                        </p>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>

                                                        </div>
<?php
}
$stmts->close(); 
                                        
}}
else
{
?>
                      <div class="col-md-8 ml-auto mr-auto">
                            <h1 class="title"> &nbsp;404
                              <br>
                              <p class="error-msg">Seems like you haven't Assign any Events yet.</p>
                              <small>No Record Found!</small>
                            </h1>
                      </div>

<?php 
}   ?>
   
            
                                     </div>









                    




<?php
}
 
?>




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