

<!DOCTYPE html>
<html lang="en">

<?php
include "pages/head.php";
 error_reporting(0);
 ob_start();
 session_start();
 date_default_timezone_set('Asia/Kolkata');
 include "sql/connect.php";
?>

<body class="sections-page sidebar-collapse">
  <!-- Extra details for Live View on GitHub Pages -->
  
  <!-- Navbar -->
 <?php
  include "pages/nav.php";
  ?>
  <!-- End Navbar -->
  <div class="section-space"></div>

  <!-- home -->
  <?php

      if($_GET['page']==1)
      {
        include "pages/home.php";  
      }
      elseif ($_GET['page']==2) {

        include "pages/enroll.php";  
      }
      elseif ($_GET['page']==3) {

        include "pages/exam.php";  
     }
      elseif ($_GET['page']==4) {

        include "pages/about.php";  
      }
      elseif ($_GET['page']==5) {

        include "pages/feedback.php";  
      }
      elseif ($_GET['page']==6) {

        include "pages/login.php";  
      }
      elseif ($_GET['page']==7) {

        include "pages/signup.php";  
      }
       elseif ($_GET['page']==8) {

        include "pages/contact.php";  
      } 
      elseif ($_GET['page']==12) {

        include "pages/single.php";  
      }
      //user profile included
      elseif ($_GET['page']==9) {

        include "pages/user/myenroll.php";  
      }
      elseif ($_GET['page']==10) {

        include "pages/user/settings.php";  
      }
       elseif ($_GET['page']==11) {

        include "pages/user/logout.php";  
      }
      elseif ($_GET['page']==13) {

        include "pages/user/attendance.php";  
      }
      else
      {
        include "pages/home.php";
      }


  ?>
  <!-- End home -->
  
 
 
 <!-- footer -->
  <?php
  include "pages/footer.php";
  ?>
  <!-- End footer --> 
  
  <!--   Core JS Files   -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--	Plugin for Datetimepicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Vertical nav - dots -->
  <script src="assets/demo/vertical-nav.js" type="text/javascript"></script>
  <!--  Photoswipe files -->
  <script src="assets/js/plugins/photo_swipe/photoswipe.min.js"></script>
  <script src="assets/js/plugins/photo_swipe/photoswipe-ui-default.min.js"></script>
  <script src="assets/js/plugins/photo_swipe/init-gallery.js"></script>
  <!--  for Jasny fileupload -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-kit.mindc68.js?v=2.3.0" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <!--  Plugin for presentation page - isometric cards  -->
  <script src="assets/js/plugins/presentation-page/main.js"></script>
  <!-- Sharrre libray -->
  <script src="assets/demo/jquery.sharrre.js"></script>


 <!-- Datatable.net libray -->
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
   <!-- Datatable.net Displaying and calling on user attendance page -->
  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable({
     searching: false, 
     dom: 'Bfrtip',
     buttons: [
       'copy', 'csv', 'excel', 'pdf', 'print'
     ]



    });
    } );
  </script>
 
 
  <script src="sql_js/signup.js"></script>
  <script src="sql_js/login.js"></script>
  <script src="sql_js/update_settings.js"></script>
  <script src="sql_js/update_password.js"></script>
  <script src="sql_js/enroll.js"></script>
  <script src="sql_js/enroll_btn.js"></script>
  <script src="sql_js/feedback.js"></script>
  <script src="sql_js/contact.js"></script>
  

</body>


</html>
