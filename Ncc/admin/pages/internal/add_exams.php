<div class="col-md-12 col-12 mr-auto ml-auto">
            <!--      Wizard container        -->
            <p id="response"></p>
            <div class="wizard-container">
              <div class="card card-wizard active" data-color="purple" id="wizardProfile">
                <form id="add_ex_form" method="post" enctype="multipart/form-data" >
                  <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                  <div class="card-header text-center">
                    <h3 class="card-title">
                   <i class="fas fa-plus-circle" style="font-size: 22px;"></i>  Create New Exam or Event notifcation
                    </h3>
                    <h5 class="card-description">You can upload important link and PDFs or other formats as well.</h5>
                    <small class="text-center"> <a href="https://www.lipsum.com/" target="_blank">Click here to find a Dummy text.</a> </small>
                  </div>
                   
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="about">
                        <h5 class="info-text"> Let's create and orgnise a new notification.</h5>

                        <div class="row justify-content-center">


                                    <div class="col-md-6">
                                        <div class="input-group form-control-lg">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="fas fa-info-circle" ></i>
                                            </span>
                                          </div>
                                          <div class="form-group bmd-form-group">
                                            <label for="exampleInput1" class="bmd-label-floating">Information</label>
                                            <input type="text" class="form-control" name="info" id="info" aria-required="true">
                                          </div>
                                        </div>
                                        <div class="input-group form-control-lg">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="fas fa-link"></i>
                                            </span>
                                          </div>
                                          <div class="form-group bmd-form-group">
                                            <label for="exampleInput11" class="bmd-label-floating">Link (optional)</label>
                                            <input type="text" class="form-control" id="link" name="link" aria-required="true">
                                          </div>
                                        </div>

                                   
                                       
                                      </div>

                              <div class="col-md-3 col-sm-3">
    		                      <h4 class="title">Select PDF file (optional)</h4>
    		                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
    		                        
    		                        <div class="fileinput-preview fileinput-exists thumbnail"></div>

    		                           <input type="file" name="pdf" id="pdf" class="btn btn-round btn-file">
    		                        
    		                      </div>
                      			 </div>



                 
                        </div>
                      </div>


                    </div>
                  </div>
                  <div class="card-footer">
                    <
                    <div class="ml-auto">
                      <input type="button" class="btn btn-next btn-fill btn-success btn-wd" id="add_ex_btn" name="add_ex_btn" value="Create">
                    
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </form>
              </div>
            </div>
            <!-- wizard container -->
          </div>