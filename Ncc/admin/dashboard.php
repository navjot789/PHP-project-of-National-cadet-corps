<?php

error_reporting(0);
 ob_start();
 session_start();
include "sql/connect.php";

?>

<?php
if(isset($_SESSION["a_loggedin"]) && $_SESSION["a_loggedin"] === true){
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <?php
     include "pages/head.php";
     ?>

</head>

<body class="">
  
  <div class="wrapper ">
    <?php
     include "pages/left_nav.php";
     ?>
   


    <div class="main-panel">
      <!-- Navbar -->
     <?php
     include "pages/nav_top.php";
     ?>



      <!-- End Navbar -->
      <div class="content">
        <div class="content">
          <div class="container-fluid">
           
         <?php

          if($_GET['page']==1)
          {
            include "pages/internal/home.php";
          }
          else if($_GET['page']==2)
          {
             include "pages/internal/cadet.php";
          }
          else if($_GET['page']==3)
          {
             include "pages/internal/enrolled.php";
          }
           else if($_GET['page']==4)
          {
              include "pages/internal/add_events.php";
          
          }
            else if($_GET['page']==5)
          {
              if($_GET['page']==5 && $_GET['sub_page']==0005)
             {
               include "pages/internal/update_events.php";
             }else
             {
              include "pages/internal/events.php";
             }
            
          }
          else if($_GET['page']==6)
          {
             include "pages/internal/attendance.php";
          }
           else if($_GET['page']==7)
          {
            
             if($_GET['page']==7 && $_GET['sub_page']==0007)
             {
               include "pages/internal/sub/view_request.php";
             }else
             {
              include "pages/internal/sub/pending.php";
             }
              

          }

        else if($_GET['page']==8)
          {
             include "pages/internal/sub/approved.php";
          }

        else if($_GET['page']==9)
          {
             include "pages/internal/sub/rejected.php";
          }

           else if($_GET['page']==10)
          {
             include "pages/internal/contact.php";
          }

        else if($_GET['page']==11)
          {
             include "pages/internal/feedback.php";
          }
        else if($_GET['page']==12)
          {
             include "pages/internal/logout.php";
          }
           else if($_GET['page']==13)
          {
             include "pages/internal/add_exams.php";
          }  
          else if($_GET['page']==14)
          {
             include "pages/internal/exams.php";
          } 
          else
          {
             include "pages/internal/home.php";
          }

         ?>


          </div>
        </div>
      </div>



          <?php
          include "pages/footer.php";
          ?>
     
    </div>
  </div>



  <!--   Core JS Files   -->
<?php
include "pages/jquery.php";
?>
<script src="sql_js/attendance.js" type="text/javascript"></script>
<script src="sql_js/add_event.js" type="text/javascript"></script>
<script src="sql_js/update_event.js" type="text/javascript"></script>
<script src="sql_js/enroll_status_fetch.js" type="text/javascript"></script><!--  this file is include in view_request   -->
<script src="sql_js/enroll_status_post.js" type="text/javascript"></script><!--  this file is include in view_request   -->
<script src="sql_js/add_exam.js" type="text/javascript"></script>
</body>

</html>
<?php
}else{
   header("location: index.php");
     exit();
}?>