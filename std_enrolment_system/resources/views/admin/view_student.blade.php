@extends('layout')
@section('content')

<div class="container-fluid page-body-wrapper">
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($view_student_info->student_image)}}">
                  <p class="name">{{($view_student_info->student_name)}}</p>
                  <p class="designation">Department of {{($view_student_info->student_department)}}</p>
                  <a class="email" href="#">{{($view_student_info->student_email)}}</a>
                  <a class="number">{{($view_student_info->student_mobile)}}</a>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li><p>{{($view_student_info->student_roll)}}</p><p>Roll</p></li>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>... Total information of this student are shown below ...</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon-globe icon">Admission ID:</i>
                      <span>{{($view_student_info->student_id)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Fathers Name:</i>
                      <span>{{($view_student_info->student_fathersname)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Mothers Name:</i>
                      <span>{{($view_student_info->student_mothersname)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Address:</i>
                      <span>{{($view_student_info->student_address)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Date of Birth:</i>
                      <span>{{($view_student_info->student_birthyear)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Blood Group:</i>
                      <span>{{($view_student_info->student_blood)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Gender:</i>
                      <span>{{($view_student_info->student_gender)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Nationality:</i>
                      <span>{{($view_student_info->student_nationality)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Religion:</i>
                      <span>{{($view_student_info->student_religion)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Admission date:</i>
                      <span>{{($view_student_info->student_admissionyear)}}</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>

@endsection