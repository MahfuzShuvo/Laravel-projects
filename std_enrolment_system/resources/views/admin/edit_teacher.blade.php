@extends('layout')
@section('content')

<div class="col-12 col-lg-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Edit Teacher</h2>

                          

                          <form class="forms-sample" method="post" action="{{URL::to('/update_teacher', $view_teacher_info->teacher_id)}}">
                          	{{ csrf_field() }}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" class="form-control p-input" name="teacher_name" aria-describedby="emailHelp" value="{{($view_teacher_info->teacher_name)}}">
                                
                              </div>
                            
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Contact No.</label>
                                  <input type="text" class="form-control p-input" name="teacher_mobile" aria-describedby="emailHelp" value="{{($view_teacher_info->teacher_mobile)}}">
                                
                              </div>
                              <div class="form-group">
                                  <label for="exampleTextarea">Address</label>
                                  <textarea class="form-control p-input" name="teacher_address" rows="3">{{($view_teacher_info->teacher_address)}}</textarea>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="email" class="form-control p-input" name="teacher_email" aria-describedby="emailHelp" value="{{($view_teacher_info->teacher_email)}}">
                                
                              </div>
                            
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Designation</label>
                                  <input type="text" class="form-control p-input" name="teacher_designation" aria-describedby="emailHelp" value="{{($view_teacher_info->teacher_designation)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Salary</label>
                                  <input type="text" class="form-control p-input" name="teacher_salary" aria-describedby="emailHelp" value="{{($view_teacher_info->teacher_salary)}}">
                              </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control p-input" name="teacher_password" value="{{($view_teacher_info->teacher_password)}}">
                              </div>

                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection