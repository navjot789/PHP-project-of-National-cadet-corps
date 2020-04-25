 <nav class="navbar navbar-expand-lg fixed-top nav-down">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="index.php" rel="tooltip" title="Paper Kit 2 PRO" data-placement="bottom" >
         D.A.V. <small>National Cadet Corps</small>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" data-nav-image="./assets/img/blurred-image-1.jpg" data-color="orange">
        <ul class="navbar-nav ml-auto">
        
         <li class=" nav-item">
            <a href="index.php?page=1" class=" nav-link" >
              Home
            </a>
          </li>

          <li class=" nav-item">
            <a href="index.php?page=2" class=" nav-link" >
              Enrollment
            </a>
          </li>

           <li class=" nav-item">
            <a href="index.php?page=1#events" class=" nav-link" >
              Events
            </a>
          </li>

          <li class=" nav-item">
            <a href="index.php?page=3" class=" nav-link" >
              Exams
            </a>
          </li>

          <li class=" nav-item">
            <a href="index.php?page=4" class=" nav-link" >
              About
            </a>
          </li>

          <li class=" nav-item">
            <a href="index.php?page=8" class=" nav-link" >
              Contact
            </a>
          </li>
          <li class=" nav-item">
            <a href="index.php?page=5" class=" nav-link" >
              Feedback
            </a>
          </li>

           <?php
           
            // Check if the user is already logged in, if yes then redirect him to MYPROFILE page
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
              
             ?>

                <li class="dropdown nav-item">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-home"></i>   <strong>My Profile</strong> </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-danger">
                    
                    <a href="index.php?page=13" class="dropdown-item">
                    <i class="fas fa-id-card-alt"></i>  My Attendance
                    </a>
                     
                    <a href="index.php?page=9" class="dropdown-item">
                    <i class="fas fa-calendar-week"></i>  My Enrollments
                    </a>
                    
                    <a href="index.php?page=10" class="dropdown-item">
                     <i class="fas fa-user-cog"></i>  Settings
                    </a>

                       <a href="index.php?page=11" class="dropdown-item">
                    <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                  
                  </div>
                </li>

             <?php
              }else{
             ?>
            <li class=" nav-item">
            <a href="index.php?page=6" class=" nav-link" >
              login
            </a>
          </li>
        
          <li class="nav-item">
            <a class="btn btn-round btn-danger" href="index.php?page=7" target="_blank">
              <i class="nc-icon nc-cart-simple"></i> Signup
            </a>
          </li>
          <?php
           }?>

           

            
        
        </ul>
      </div>
    </div>
  </nav>