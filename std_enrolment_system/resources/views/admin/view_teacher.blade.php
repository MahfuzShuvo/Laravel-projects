@extends('layout')
@section('content')

<div class="container-fluid page-body-wrapper">
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($view_teacher_info->teacher_image)}}">
                  <p class="name">{{($view_teacher_info->teacher_name)}}</p>
                  <p class="designation">{{($view_teacher_info->teacher_designation)}}</p>
                  <a class="email" href="#">{{($view_teacher_info->teacher_email)}}</a>
                  <a class="number">{{($view_teacher_info->teacher_mobile)}}</a>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li><p>{{($view_teacher_info->teacher_department)}}</p><p>-: Department :-</p></li>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>... Total information of this teacher are shown below ...</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon-globe icon">Joinig ID:</i>
                      <span>{{($view_teacher_info->teacher_id)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Address:</i>
                      <span>{{($view_teacher_info->teacher_address)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Blood Group:</i>
                      <span>{{($view_teacher_info->teacher_blood)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Gender:</i>
                      <span>{{($view_teacher_info->teacher_gender)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Nationality:</i>
                      <span>{{($view_teacher_info->teacher_nationality)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Religion:</i>
                      <span>{{($view_teacher_info->teacher_religion)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Marital Status:</i>
                      <span>{{($view_teacher_info->teacher_marital_status)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Salary:</i>
                      <span>{{($view_teacher_info->teacher_salary)}}</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>

@endsection