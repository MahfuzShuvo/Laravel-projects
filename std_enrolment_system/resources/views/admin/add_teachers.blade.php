@extends('layout')
@section('content')

<div class="col-12 col-lg-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Teachers</h2>

                          <p class="alert-success">
			              	<?php
			              		$exception = Session::get('exception');

			              		if($exception){
			              			echo $exception;
			              			Session::put('exception', null);
			              		}
			               	?>
			              </p>

                          <form class="forms-sample" method="post" action="{{URL::to('/save_teachers')}}" enctype="multipart/form-data">
                          	{{ csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" class="form-control p-input" name="teacher_name" aria-describedby="emailHelp" placeholder="Enter name">
                                
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Designation</label>
                                  <input type="text" class="form-control p-input" name="teacher_designation" aria-describedby="emailHelp" placeholder="Enter designation">
                                
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Contact No.</label>
                                  <input type="text" class="form-control p-input" name="teacher_mobile" aria-describedby="emailHelp" placeholder="Enter mobile no.">
                                
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="email" class="form-control p-input" name="teacher_email" aria-describedby="emailHelp" placeholder="Enter email">
                                
                              </div>
                              <div class="form-group">
                                  <label for="exampleTextarea">Address</label>
                                  <textarea class="form-control p-input" name="teacher_address" rows="3" placeholder="Enter address"></textarea>
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputEmail1">Department</label>
                                	<select class="form-control p-input" name="teacher_department">
                                		<option>CSE</option>
                                		<option>EEE</option>
                                		<option>BBA</option>
                                		<option>Textile Engineering</option>
                                		<option>Law & Justice</option>
                                	</select>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Salary</label>
                                  <input type="text" class="form-control p-input" name="teacher_salary" aria-describedby="emailHelp" placeholder="Enter salary">
         
                              </div>

                              <div class="form-group">
                                  
                                    <label for="exampleInputEmail1">Marital Status</label>
                                <div class="form-radio">
                                    <label class="form-check-label" style="font-size: 12px;">
                                      <input type="radio" class="form-check-input" name="teacher_marital_status" id="married" value="married" checked>
                                      Married
                                    </label>
                                </div>
                                <div class="form-radio">
                                    <label class="form-check-label" style="font-size: 12px;">
                                      <input type="radio" class="form-check-input" name="teacher_marital_status" id="unmarried" value="unmarried">
                                      Unmarried
                                    </label>
                                </div>
                            </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Blood Group</label>
                                  <select class="form-control p-input" name="teacher_blood">
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
                                  <input type="text" class="form-control p-input" name="teacher_nationality" aria-describedby="emailHelp" placeholder="Enter nationality">
                                
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Religion</label>
                                  <input type="text" class="form-control p-input" name="teacher_religion" aria-describedby="emailHelp" placeholder="Enter religion">
                                
                              </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Gender</label>
                                <div class="form-radio">
                                    <label class="form-check-label" style="font-size: 12px;">
                                      <input type="radio" class="form-check-input" name="teacher_gender" id="male" value="male" checked>
                                      Male
                                    </label>
                                </div>
                                <div class="form-radio">
                                    <label class="form-check-label" style="font-size: 12px;">
                                      <input type="radio" class="form-check-input" name="teacher_gender" id="female" value="female">
                                      Female
                                    </label>
                                </div>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control p-input" name="teacher_password" placeholder="Password">
                              </div>

                              <div class="form-group">
                                  <label>Upload file</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                                      <input type="file" class="form-control-file" name="teacher_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      
                                    </div>
                                  </div>
                              </div>
               
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection