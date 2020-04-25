  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
    <div class="container">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="javascript:;">Administrator login page</a>
      </div>
   
    </div>
  </nav>
 
  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('assets/img/login.jpg'); background-size: cover; background-position: top center;">
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">

              <p id="login_response"></p>

            <form class="form" id="login_submit" method="post" >
              <div class="card card-login ">
                <div class="card-header card-header-rose text-center">
                  <h4 class="card-title">Admin login</h4>

                </div>
                <div class="card-body ">
                  <p id="login_response"></p>
                  <p class="card-description text-center">Enter your Credentials</p>
                 
                 
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input type="email" class="form-control" placeholder="Username..." id="email" name="email">
                    </div>
                  </span>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" class="form-control" placeholder="Password..." id="password" name="password">
                    </div>
                  </span>
                </div>
                <div class="card-footer justify-content-center">
                  <button class="btn btn-rose btn-link btn-lg" id="login_btn" name="login_btn">Lets Go</button> 
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
     <?php
     include "footer.php";
     ?>
    </div>
  </div>