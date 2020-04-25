<div class="col-md-12 col-12 mr-auto ml-auto">
            <!--      Wizard container        -->
            <p id="response"></p>
            <div class="wizard-container">
              <div class="card card-wizard active" data-color="purple" id="wizardProfile">
                <form id="add_event_form" method="post" enctype="multipart/form-data" >
                  <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                  <div class="card-header text-center">
                    <h3 class="card-title">
                   <i class="fas fa-plus-circle" style="font-size: 22px;"></i>  Create New Event
                    </h3>
                    <h5 class="card-description">All the information can be view directly on event page.</h5>
                    <small class="text-center"> <a href="https://www.lipsum.com/" target="_blank">Click here to find a Dummy text.</a> </small>
                  </div>
                   
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="about">
                        <h5 class="info-text"> Let's create and orgnise a new event.</h5>

                        <div class="row justify-content-center">

                          <div class="col-md-3 col-sm-3">
		                      <h4 class="title">Select Event Image</h4>
		                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
		                        <div class="fileinput-new thumbnail">
		                          <img src="../assets/img/image_placeholder.jpg" alt="..." style="height:150px;width: 200px;">
		                        </div>
		                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
		                        <div>
		                          <span class="btn btn-round btn-file">
		                            <span class="fileinput-new">Select image</span>
		                            <span class="fileinput-exists">Change</span>
		                            <input type="file" name="event_img" id="event_img">
		                          </span>
		                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
		                        </div>
		                      </div>
                  			 </div>

                          <div class="col-md-6">
                            <div class="input-group form-control-lg">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-marker"></i>
                                </span>
                              </div>
                              <div class="form-group bmd-form-group">
                                <label for="exampleInput1" class="bmd-label-floating">Main headline</label>
                                <input type="text" class="form-control" name="title" id="title" aria-required="true">
                              </div>
                            </div>
                            <div class="input-group form-control-lg">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-pencil-alt"></i>
                                </span>
                              </div>
                              <div class="form-group bmd-form-group">
                                <label for="exampleInput11" class="bmd-label-floating">Sub headline</label>
                                <input type="text" class="form-control" id="sub_title" name="sub_title" aria-required="true">
                              </div>
                            </div>

  								<div class="input-group form-control-lg">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-pen-square"></i>
                                </span>
                              </div>
                              <div class="form-group bmd-form-group">
                                <label for="exampleInput1" class="bmd-label-floating" >Description</label>
                               
                                <textarea class="form-control" rows="7" id="text" name="text" aria-required="true"></textarea>
                              </div>
                            </div>
                           
                          </div>


                          
                        </div>
                      </div>


                    </div>
                  </div>
                  <div class="card-footer">
                    <
                    <div class="ml-auto">
                      <input type="button" class="btn btn-next btn-fill btn-success btn-wd" id="add_event_btn" name="add_event_btn" value="Create">
                    
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </form>
              </div>
            </div>
            <!-- wizard container -->
          </div>