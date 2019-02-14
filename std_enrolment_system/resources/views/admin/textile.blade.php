@extends('layout')
@section('content')
<div class="col-12 col-lg-12 grid-margin">
<div class="card">
            <div class="card-body">
              <h2 class="card-title">Students of Textile Engineering</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Roll #</th>
                          <th>Name</th>
                          <th>Contact</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Image</th>
                          <th>Department</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($textile_students_info as $v_students)
                      <tr>
                          <td>{{$v_students->student_roll}}</td>
                          <td>{{$v_students->student_name}}</td>
                          <td>{{$v_students->student_mobile}}</td>
                          <td>{{$v_students->student_email}}</td>
                          <td>{{$v_students->student_address}}</td>
                          <td><img src="{{URL::to($v_students->student_image)}}" height="40" width="40" style="border-radius: 50%;"></td>
                          <td>{{$v_students->student_department}}</td>
                         
                          <td>
                            <a href="{{URL::to('/view_student/'.$v_students->student_id)}}"><i class="mdi mdi-eye text-primary mr-2"></i></a>
                            <a href="{{URL::to('/edit_student/'.$v_students->student_id)}}"><i class="mdi mdi-pencil text-warning mr-2"></i></a>
                            <a href="{{URL::to('/delete_student/'.$v_students->student_id)}}" id="delete"><i class="mdi mdi-delete-empty text-danger mr-2"></i></a>
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