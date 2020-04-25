 <?php
 if(isset($_GET['cadetid']) && $_GET['cadetid']!=='')
 {
 ?>
 <div id="result">
        <!--Server response will be inserted here-->
  </div>
  <p id="stat_response"></p>
<?php

	$res =mysqli_query($con,"select * from enrollment where cid='".$_GET['cadetid']."'");
	$row=mysqli_fetch_array($res);
?>

<h3><i class="fas fa-info-circle text-info"></i> Enrollment info</h3>
<div class="col-md-12">
	<div class="row">
		<div class="col-md-3">
			<div class="text-center"> 
				<img src="..\assets\image\uploads\<?php echo $row['c_img'];?>" class=" img-circle img-thumbnail" alt="avatar" style="height:200px;width: 200px; ">
					<h6>Profile Picture</h6>
			 </div>
		</div>
					<div class="col-md-9 personal-info">
					
					<form class="form-horizontal" role="form">
							<h4><i class="fas fa-user-alt"></i> Personal info</h4>
							<hr>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group"> <label >Cadet-ID</label>
										<input class="form-control" type="text" value="<?php echo $row['fid'];?>" disabled >
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group"> <label >Mother's Name</label>
										<input class="form-control" type="text" value="<?php echo $row['mname'];?>" disabled >
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group"> <label >Guardian's Name</label>
										<input class="form-control" type="text" value="<?php echo $row['gurdian'];?>" disabled >
									</div>
								</div>	
								<div class="col-md-3">
									<div class="form-group"> <label >Post Office</label>
										<input class="form-control" type="text" value="<?php echo $row['post_office'];?>"  disabled>
									</div>
								</div>

							</div>
							

							<div class="row">
								
							
								<div class="col-md-3">
									<div class="form-group"> <label >Railway Station</label>
										<input class="form-control" type="text" value="<?php echo $row['rail'];?>" disabled >
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group"> <label >DSPMU</label>
										<input class="form-control" type="text" value="<?php echo $row['dspmu'];?>" disabled >
									</div>
								</div>
								
									<div class="col-md-3">
										<div class="form-group"><label >Department</label> 
											<input class="form-control" type="text" value="<?php echo $row['depart'];?>" disabled >
										</div>
									</div>
									<div class="col-md-3">
												<div class="form-group"> <label >Class Roll</label>
													<input class="form-control" type="text" value="<?php echo $row['roll'];?>" disabled >
												</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-3">
										<div class="form-group"><label >Registration No.</label> 
											<input class="form-control" type="text" value="<?php echo $row['reg_no'];?>" disabled >
										</div>
									</div>
											
											<div class="col-md-3">
												<div class="form-group"> <label >Honour's</label>
													<input class="form-control" type="text" value="<?php echo $row['honour'];?>" disabled >
												</div>
											</div>	
											<div class="col-md-3">
												<div class="form-group"> <label >Semester</label>
													<input class="form-control" type="text" value="<?php echo $row['sem'];?>" disabled>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group"> <label >Session</label>
													<input class="form-control" type="text" value="<?php echo $row['session'];?>" disabled >
												</div>
											</div>
							</div>
							
							
							
					

				</form>
			</div>
		</div>

		<div class="row">
				<div class="col-md-3">
					<div class="text-center"> 
						<img src="..\assets\image\uploads\marksheet\<?php echo $row['m_img'];?>" class=" img-circle img-thumbnail" alt="avatar" style="height:200px;width: 200px; ">
							<h6>Marksheet Picture</h6>
					 </div>
				</div>
			<div class="col-md-9 personal-info">
				<div class="form-horizontal" >
						

							

						<h4><i class="fas fa-map-marker-alt" ></i> Address info</h4>
							<hr>


							<div class="row">
								
								<div class="col-md-12">
									<div class="form-group"> <label >Address</label>
										<textarea  class="form-control" type="text" value="<?php echo $row['address'];?>" disabled></textarea> 
									</div>
								</div>

							</div>
							<div class="row">
											
											<div class="col-md-3">
												<div class="form-group"> <label >Country</label>
													<input class="form-control" type="text" value="<?php echo $row['country'];?>" disabled >
												</div>
											</div>	
											<div class="col-md-3">
												<div class="form-group"> <label >State</label>
													<input class="form-control" type="text" value="<?php echo $row['state'];?>" disabled>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group"> <label >City</label>
													<input class="form-control" type="text" value="<?php echo $row['city'];?>" disabled >
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group"> <label >Pincode</label>
													<input class="form-control" type="text" value="<?php echo $row['pin'];?>" disabled >
												</div>
											</div>
							</div>

							<p></p>
						   <h4><i class="fas fa-user-graduate" ></i> Education info</h4>
							<hr>

								
				         
				          

										<div class="table-responsive">
											<table class="table">
											  <thead class="thead-dark">
											    <tr>
											      <th scope="col">Course</th>
											      <th scope="col">School/College</th>
											      <th scope="col">Board/University</th>
											      <th scope="col">Percentage(%)</th>
											      <th scope="col">Year</th>
											    </tr>
											  </thead>
											  <tbody>
											    <tr>
											      <th scope="row">
											      	Matric
											      </th>
											      <td> <input type="text" class="form-control" value="<?php echo $row['m_s_c'];?>" disabled></td>
											      <td> <input type="text" class="form-control" value="<?php echo $row['m_b_u'];?>" disabled></td>
											      <td> <input type="text" class="form-control" value="<?php echo $row['m_p'];?>" disabled></td>
											      <td> <input type="text" class="form-control" value="<?php echo $row['m_y'];?>" disabled></td>
											    </tr>
											    <tr>
											      <th scope="row">Intermediate</th>
											      <td> <input type="text" class="form-control" value="<?php echo $row['i_s_c'];?>" disabled></td>
											      <td> <input type="text" class="form-control" value="<?php echo $row['i_b_u'];?>" disabled></td>
											      <td> <input type="text" class="form-control" value="<?php echo $row['i_p'];?>" disabled></td>
											      <td> <input type="text" class="form-control" value="<?php echo $row['i_y'];?>" disabled></td>
											    </tr>
											    <tr>
											      <th scope="row">Others</th>
											       <td> <input type="text" class="form-control" value="<?php echo $row['o_s_c'];?>" disabled></td>
											      <td> <input type="text" class="form-control" value="<?php echo $row['o_b_u'];?>" disabled></td>
											      <td> <input type="text" class="form-control" value="<?php echo $row['o_p'];?>" disabled></td>
											      <td> <input type="text" class="form-control" value="<?php echo $row['o_y'];?>" disabled></td>
											    </tr>
											  </tbody>
											</table>
										</div>


				         
							<p></p>
						   <h4><i class="fas fa-info" ></i> Other info</h4>
							<hr>
							<style type="text/css">
								.collapsed{
									color:#626262;
									font-weight: bold;
								}
							</style>

							<div class="row">
								<div id="acordeon">
					            <div id="accordion" role="tablist" aria-multiselectable="true">
					              <div class="card no-transition">
					                <div class="card-header card-collapse" role="tab" id="headingOne">
					                  <h5 class="mb-0 panel-title">
					                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
					                     Have you ever been convicted by a criminal court and if so in which circumstances and what was the sentence ?
					                      <i class="nc-icon nc-minimal-down"></i>
					                    </a>
					                  </h5>
					                </div>
					                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
					                  <div class="card-body">

					                   <div class="row">
							                <div class="col-md-12">
							               <input class="form-control" type="text" value="<?php echo $row['q_1'];?>" disabled >
									
							                </div>
							               
							              </div>


					                  </div>
					                </div>
					                <div class="card-header card-collapse" role="tab" id="headingTwo">
					                  <h5 class="mb-0 panel-title">
					                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					                    Are you willing to be enrolled under National Cadet Corps Act 1948 ?
					                      <i class="nc-icon nc-minimal-down"></i>
					                    </a>
					                  </h5>
					                </div>
					                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
					                  <div class="card-body">

					                   <div class="row">
							                <div class="col-md-12">
							               <input class="form-control" type="text" value="<?php echo $row['q_2'];?>" disabled >
									
							                </div>
							               
							              </div>

					                  </div>
					                </div>
					                <div class="card-header card-collapse" role="tab" id="headingThree">
					                  <h5 class="mb-0 panel-title">
					                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					                    In which unit do you desire to be enrolled ?
					                      <i class="nc-icon nc-minimal-down"></i>
					                    </a>
					                  </h5>
					                </div>
					                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
					                  <div class="card-body">

					                    <div class="row">
							                <div class="col-md-12">
							              <input type="text" class="form-control" value="2/19/JH/BNNCC" disabled="" >
							                </div>
							               
							              </div>


					                  </div>
					                </div>

    						 <div class="card-header card-collapse" role="tab" id="headingfour">
					                  <h5 class="mb-0 panel-title">
					                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
					                   Are you willing to undergo service training as specified in the Act and the rules made there under?
					                      <i class="nc-icon nc-minimal-down"></i>
					                    </a>
					                  </h5>
					                </div>
					                <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingfour">
					                  <div class="card-body">
					                  	
					                   
					                   <div class="row">
							                <div class="col-md-12">
							               <input class="form-control" type="text" value="<?php echo $row['q_3'];?>" disabled >
									
							                </div>
							               
							              </div>


					                  </div>
					                </div>

							 <div class="card-header card-collapse" role="tab" id="headingfive">
					                  <h5 class="mb-0 panel-title">
					                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
					                Are you willing to serve in the National Cadet Corps until discharged as provided in Act ?
					                      <i class="nc-icon nc-minimal-down"></i>
					                    </a>
					                  </h5>
					                </div>
					                <div id="collapsefive" class="collapse" role="tabpanel" aria-labelledby="headingfive">
					                  <div class="card-body">
					                  	
					                    
					                   <div class="row">
							                <div class="col-md-12">
							               <input class="form-control" type="text" value="<?php echo $row['q_4'];?>" disabled >
									
							                </div>
							               
							              </div>


					                  </div>
					                </div>


							 <div class="card-header card-collapse" role="tab" id="headingsix">
					                  <h5 class="mb-0 panel-title">
					                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
					                Have you ever previously applied for appointment
									under the Act and if so with what result ?
					                      <i class="nc-icon nc-minimal-down"></i>
					                    </a>
					                  </h5>
					                </div>
					                <div id="collapsesix" class="collapse" role="tabpanel" aria-labelledby="headingsix">
					                  <div class="card-body">
					                 
					                   <div class="row">
							                <div class="col-md-12">
							               <input class="form-control" type="text" value="<?php echo $row['q_5'];?>" disabled >
									
							                </div>
							               
							              </div>


					                  </div>
					                </div>

								<div class="card-header card-collapse" role="tab" id="headingseven">
					                  <h5 class="mb-0 panel-title">
					                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
					               Have you ever been dismissed from the National Cadet Corps. The Territorial Army or the Indian Armed Forces ?
					                      <i class="nc-icon nc-minimal-down"></i>
					                    </a>
					                  </h5>
					                </div>
					                <div id="collapseseven" class="collapse" role="tabpanel" aria-labelledby="headingseven">
					                  <div class="card-body">
					                  	
					                    
					                   <div class="row">
							                <div class="col-md-12">
							               <input class="form-control" type="text" value="<?php echo $row['q_6'];?>" disabled >
									
							                </div>
							               
							              </div>


					                  </div>
					                </div>

					              </div>
					            </div>
					            <!--  end acordeon -->
					          </div>
								
							</div>


								<div class="row">
											
											<div class="col-md-3">
												<div class="form-group"> <label >Bank Account Number</label>
													<input class="form-control" type="text" value="<?php echo $row['bank_acc'];?>" disabled >
												</div>
											</div>	
											<div class="col-md-3">
												<div class="form-group"> <label >Name of bank</label>
													<input class="form-control" type="text" value="<?php echo $row['bank_name'];?>" disabled>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group"> <label >Branch Name</label>
													<input class="form-control" type="text" value="<?php echo $row['branch_name'];?>" disabled >
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group"> <label >IFSC</label>
													<input class="form-control" type="text" value="<?php echo $row['ifsc'];?>" disabled >
												</div>
											</div>
							</div>

							<div class="row">
											
											<div class="col-md-12">
												<div class="form-group"> <label >Aadhar Number</label>
													<input class="form-control" type="text" value="<?php echo $row['aadhar'];?>" disabled >
												</div>
											</div>	
											
							</div>
							<div class="row">
								         <div class="col-md-3">
												<div class="form-group"> <label >Kin's Name</label>
													<input class="form-control" type="text" value="<?php echo $row['k_name'];?>">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group"> <label >Kin's Address</label>
													<input class="form-control" type="text" value="<?php echo $row['k_address'];?>" disabled >
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group"> <label >Relationship</label>
													<input class="form-control" type="text" value="<?php echo $row['k_relation'];?>" disabled >
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group"> <label >mobile no.</label>
													<input class="form-control" type="text" value="<?php echo $row['k_no'];?>" disabled >
												</div>
											</div>
							</div>
							
                        <form id="enroll_update_form" method="post">
							<div class="row">

									<div class="col-md-12 ">
												<div class="form-group  "> <label >Status</label>
													<select class=" form-group btn btn-primary"  name="status" id="status" >
														<option  disabled>------Select Status------</option>
																		
														<option  <?php if($row['status']== 0) echo 'selected="selected"'; ?> value="0" disabled>Pending</option>
														<option  <?php if($row['status']== 1) echo 'selected="selected"'; ?> value="1">Approved</option>
														<option  <?php if($row['status']== 2) echo 'selected="selected"'; ?> value="2">Rejected</option>
													</select>
												</div>
												<input type="hidden" name="cadet" id="cadet" value="<?php echo $row['cid'];?>">
											<small>Note: Status once touched cannot be return to pending state.</small>	
									 </div>
					             
				                   <div class="col-md-6 ml-auto mr-auto">
 									 <button class="btn btn-success btn-block btn-round" onclick="topFunction()" type="button" id="update_status" name="update_status" >Update</button>
 									</div>
				               
				              </div>
				          </form>


				</div>
			</div>
		</div>

</div>
<?php
}else
{
	echo "SQL: $ _GET ERROR.".'</BR>';
	echo "Report: cadetid is received empty!";
}
?>


