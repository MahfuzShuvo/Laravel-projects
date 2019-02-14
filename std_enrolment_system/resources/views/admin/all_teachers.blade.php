@extends('layout')
@section('content')

<div class="col-12 col-lg-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">All Teachers</h2>

              <p class="alert-success">
                      <?php
                        $exception = Session::get('exception');

                        if($exception){
                          echo $exception;
                          Session::put('exception', null);
                        }
                      ?>
               </p>

              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>Designation</th>
                          <th>Contact</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Image</th>
                          <th>Department</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($all_teachers_info as $v_teachers)
                      <tr>
                          <td>{{$v_teachers->teacher_name}}</td>
                          <td>{{$v_teachers->teacher_designation}}</td>
                          <td>{{$v_teachers->teacher_mobile}}</td>
                          <td>{{$v_teachers->teacher_email}}</td>
                          <td>{{$v_teachers->teacher_address}}</td>
                          <td><img src="{{URL::to($v_teachers->teacher_image)}}" height="40" width="40" style="border-radius: 50%;"></td>
                          <td>{{$v_teachers->teacher_department}}</td>
                         
                          <td>
                            <a href="{{URL::to('/view_teacher/'.$v_teachers->teacher_id)}}"><i class="mdi mdi-eye text-primary mr-2"></i></a>
                            <a href="{{URL::to('/edit_teacher/'.$v_teachers->teacher_id)}}"><i class="mdi mdi-pencil text-warning mr-2"></i></a>
                            <a href="{{URL::to('/delete_teacher/'.$v_teachers->teacher_id)}}" id="delete"><i class="mdi mdi-delete-empty text-danger mr-2"></i></a>
                          </td>
                      </tr>
                      	@endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
</div>

@endsection