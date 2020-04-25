    <div class="sidebar" data-color="purple" data-background-color="black" data-image="assets/img/sidebar-3.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="#" class="simple-text logo-mini">
          <small>NCC</small> 
        </a>
        <a href="#" class="simple-text logo-normal">
          Admin Portal
        </a></div>
      <div class="sidebar-wrapper">
       
        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="dashboard.php?page=1">
            <i class="fas fa-home"></i>
              <p> Dashboard </p>
            </a>
          </li>
      
          
          <li class="nav-item ">
            <a class="nav-link" href="dashboard.php?page=2">
              <i class="fas fa-user"></i>
              <p> Cadets </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="dashboard.php?page=3">
              <i class="fas fa-calendar-week"></i>
              <p> Enrolled Events </p>
            </a>
          </li>

       

            <li class="nav-item ">
                  <a class="nav-link collapsed" data-toggle="collapse" href="#mapsExamples" aria-expanded="false">
                    <i class="fab fa-elementor"></i>
                    <p> Events
                      <b class="caret"></b>
                    </p>
                  </a>
                  <div class="collapse" id="mapsExamples" style="">
                    <ul class="nav">
                      <li class="nav-item ">
                        <a class="nav-link" href="dashboard.php?page=4">
                          <span class="sidebar-mini"> AE </span>
                          <span class="sidebar-normal"> Add Event </span>
                        </a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="dashboard.php?page=5">
                          <span class="sidebar-mini"> LE </span>
                          <span class="sidebar-normal"> List Events</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

           <li class="nav-item ">
            <a class="nav-link" href="dashboard.php?page=6">
              <i class="fas fa-id-card-alt"></i>
              <p> Attendance </p>
            </a>
          </li>

       

              <li class="nav-item ">
                  <a class="nav-link collapsed" data-toggle="collapse" href="#Requests" aria-expanded="false">
                   <i class="far fa-address-card"></i>
                    <p> Enrollment Requests
                      <b class="caret"></b>
                    </p>
                  </a>
                  <div class="collapse" id="Requests" style="">
                    <ul class="nav">
                      <li class="nav-item ">
                        <a class="nav-link" href="dashboard.php?page=7">
                          <span class="sidebar-mini"> PR </span>
                          <span class="sidebar-normal"> Pending Request


                         <?php 
                             $status = 0;
                             $sql_prepare = 'SELECT fid FROM enrollment WHERE status = ?';
                                            $stmt = $con->prepare($sql_prepare); 
                                            $stmt->bind_param('i',$status);
                                            $stmt->execute();
                                            //$stmt->bind_result($fid,$cid,$status,$c_img,$cdate);
                                            $stmt->store_result();
                                            $numberofrows = $stmt->num_rows;
                                if($numberofrows > 0)
                                {
                                       echo '<span class="badge badge-danger ">'.$numberofrows.'</span>';
                                } else{
                                          echo "";
                                } $stmt->close();
                                           
                                            ?>
                           </span>
                        </a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="dashboard.php?page=8">
                          <span class="sidebar-mini"> AR </span>
                          <span class="sidebar-normal"> Approved Request</span>
                        </a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="dashboard.php?page=9">
                          <span class="sidebar-mini"> RR </span>
                          <span class="sidebar-normal"> Rejected Request
                        <?php 
                             $status = 2;
                             $sql_prepare = 'SELECT fid FROM enrollment WHERE status = ?';
                                            $stmt = $con->prepare($sql_prepare); 
                                            $stmt->bind_param('i',$status);
                                            $stmt->execute();
                                            //$stmt->bind_result($fid,$cid,$status,$c_img,$cdate);
                                            $stmt->store_result();
                                            $numberofrows = $stmt->num_rows;
                                if($numberofrows > 0)
                                {
                                      echo '<span class="badge badge-danger ">'.$numberofrows.'</span>';
                                } else{
                                          echo "";
                                } $stmt->close();
                                           
                                            ?>
                           </span>


                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                 <li class="nav-item ">
                  <a class="nav-link collapsed" data-toggle="collapse" href="#exam" aria-expanded="false">
                   <i class="fas fa-tasks" ></i>
                    <p>Manage Exams
                      <b class="caret"></b>
                    </p>
                  </a>
                  <div class="collapse" id="exam" style="">
                    <ul class="nav">
                      <li class="nav-item ">
                        <a class="nav-link" href="dashboard.php?page=13">
                          <span class="sidebar-mini"> AE </span>
                          <span class="sidebar-normal"> Add Exam </span>
                        </a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="dashboard.php?page=14">
                          <span class="sidebar-mini"> LE </span>
                          <span class="sidebar-normal"> List Exam</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                  <li class="nav-item ">
                  <a class="nav-link" href="dashboard.php?page=10">
                    <i class="fas fa-headset"></i>
                    <p> ContactUs Report</p>
                  </a>
                </li>

                  <li class="nav-item ">
                    <a class="nav-link" href="dashboard.php?page=11">
                      <i class="fas fa-comment-dots"></i>
                      <p> Feedback Report</p>
                    </a>
                  </li>
   
   

        </ul>
      </div>
    </div>