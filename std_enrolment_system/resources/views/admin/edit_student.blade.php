@extends('layout')
@section('content')

<div class="col-12 col-lg-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Edit Student</h2>

                          

                          <form class="forms-sample" method="post" action="{{URL::to('/update_student', $view_student_info->student_id)}}">
                          	{{ csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" value="{{($view_student_info->student_name)}}">
                                
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Father's Name</label>
                                  <input type="text" class="form-control p-input" name="student_fathersname" aria-describedby="emailHelp" value="{{($view_student_info->student_fathersname)}}">
                                
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Mother's Name</label>
                                  <input type="text" class="form-control p-input" name="student_mothersname" aria-describedby="emailHelp" value="{{($view_student_info->student_mothersname)}}">
                                
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Contact No.</label>
                                  <input type="text" class="form-control p-input" name="student_mobile" aria-describedby="emailHelp" value="{{($view_student_info->student_mobile)}}">
                                
                              </div>
                              <div class="form-group">
                                  <label for="exampleTextarea">Address</label>
                                  <textarea class="form-control p-input" name="student_address" rows="3">{{($view_student_info->student_address)}}</textarea>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="email" class="form-control p-input" name="student_email" aria-describedby="emailHelp" value="{{($view_student_info->student_email)}}">
                                
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
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" value="{{($view_student_info->student_password)}}">
                              </div>
                              
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" aria-describedby="emailHelp" value="{{($view_student_info->student_roll)}}">
                              </div>

                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection