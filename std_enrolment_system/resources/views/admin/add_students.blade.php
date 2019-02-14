@extends('layout')
@section('content')

<div class="col-12 col-lg-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Students</h2>

                          <p class="alert-success">
			              	<?php
			              		$exception = Session::get('exception');

			              		if($exception){
			              			echo $exception;
			              			Session::put('exception', null);
			              		}
			               	?>
			              </p>

                          <form class="forms-sample" method="post" action="{{URL::to('/save_students')}}" enctype="multipart/form-data">
                          	{{ csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="Enter name">
                                
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Father's Name</label>
                                  <input type="text" class="form-control p-input" name="student_fathersname" aria-describedby="emailHelp" placeholder="Enter father's name">
                                
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Mother's Name</label>
                                  <input type="text" class="form-control p-input" name="student_mothersname" aria-describedby="emailHelp" placeholder="Enter mother's name">
                                
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Contact No.</label>
                                  <input type="text" class="form-control p-input" name="student_mobile" aria-describedby="emailHelp" placeholder="Enter mobile no.">
                                
                              </div>
                              <div class="form-group">
                                  <label for="exampleTextarea">Address</label>
                                  <textarea class="form-control p-input" name="student_address" rows="3" placeholder="Enter address"></textarea>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="email" class="form-control p-input" name="student_email" aria-describedby="emailHelp" placeholder="Enter email">
                                
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Date of Birth</label>
                                  <input type="date" class="form-control p-input" name="student_birthyear" aria-describedby="emailHelp">
                                
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Blood Group</label>
                                  <select class="form-control p-input" name="student_blood">
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>O+</option>
                                    <option>O-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Nationality</label>
                                  <input type="text" class="form-control p-input" name="student_nationality" aria-describedby="emailHelp" placeholder="Enter nationality">
                                
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Religion</label>
                                  <input type="text" class="form-control p-input" name="student_religion" aria-describedby="emailHelp" placeholder="Enter religion">
                                
                              </div>
                              <div class="form-group">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Gender</label>
                                <div class="form-radio">
                                    <label class="form-check-label" style="font-size: 12px;">
                                      <input type="radio" class="form-check-input" name="student_gender" id="male" value="male" checked>
                                      Male
                                    </label>
                                </div>
                                <div class="form-radio">
                                    <label class="form-check-label" style="font-size: 12px;">
                                      <input type="radio" class="form-check-input" name="student_gender" id="female" value="female">
                                      Female
                                    </label>
                                </div>
                            </div>
                              </div>
                              
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Department</label>
                                	<select class="form-control p-input" name="student_department">
                                		<option>CSE</option>
                                		<option>EEE</option>
                                		<option>BBA</option>
                                		<option>Textile Engineering</option>
                                		<option>Law & Justice</option>
                                	</select>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" aria-describedby="emailHelp" placeholder="Enter roll">
                                
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Admission Year</label>
                                  <input type="date" class="form-control p-input" name="student_admissionyear" aria-describedby="emailHelp">
                                
                              </div>
                              
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" placeholder="Password">
                              </div>

                              <div class="form-group">
                                  <label>Upload file</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                      <input type="file" class="form-control-file" name="student_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      
                                    </div>
                                  </div>
                              </div>
               
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection