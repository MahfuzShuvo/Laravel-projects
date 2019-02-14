@extends('layout')
@section('content')
{{-- <div class="container-fluid page-body-wrapper"> --}}
  <div class="col-12 col-lg-12 grid-margin">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin drag-item d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="fa fa-users highlight-icon text-primary fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="float-right">
                      <p class="card-text">Students</p>
                      @php
                        $student = DB::table('student_tbl')
                                      ->count('student_id');
                      @endphp
                      <div class="fluid-container d-flex align-items-center">
                        <i class="fa fa-forward text-muted mr-2 fa-2x" aria-hidden="true"></i>
                        <h4 class="card-title font-weight-normal mb-0">{{$student}}</h4>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="fa fa-exclamation-circle text-primary mr-1" aria-hidden="true"></i> 25% Higher
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin drag-item d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="fa highlight-icon fa fa-user text-success fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="float-right">
                      <p class="card-text">Teachers</p>
                      @php
                        $teacher = DB::table('teacher_tbl')
                                      ->count('teacher_id');
                      @endphp
                      <div class="fluid-container d-flex align-items-center">
                        <i class="fa fa-forward text-muted mr-2 fa-2x" aria-hidden="true"></i>
                        <h4 class="card-title font-weight-normal mb-0">{{$teacher}}</h4>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="fa fa-exclamation-circle text-success mr-1" aria-hidden="true"></i> 30% Higher
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin drag-item d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="fa highlight-icon fa-bookmark text-warning fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="float-right">
                      <p class="card-text">Departments</p>
                      <div class="fluid-container d-flex align-items-center">
                        <i class="fa fa-forward text-muted mr-2 fa-2x" aria-hidden="true"></i>
                        <h4 class="card-title font-weight-normal mb-0">5</h4>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="fa fa-exclamation-circle text-warning  mr-1" aria-hidden="true"></i> 5% Higher
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin drag-item d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <span class="fa-stack">
                          <i class="fa highlight-icon fa-usd fa-2x text-danger" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="float-right">
                      <p class="card-text">Tution fees (per credit)</p>
                      <div class="fluid-container d-flex align-items-center">
                        <i class="fa fa-forward text-muted mr-2 fa-2x" aria-hidden="true"></i>
                        <h4 class="card-title font-weight-normal mb-0">2580 Tk.</h4>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3">
                    <i class="fa fa-exclamation-circle text-danger mr-1" aria-hidden="true"></i> 20% Waiver for siblings
                  </p>
                </div>
              </div>
            </div>  
          </div>
            

      

            <div class="row">
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin d-flex align-items-stretch">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-facebook">{{-- <i class="mdi mdi-facebook"></i> --}}<p class="mb-0">Faculty of Engineering</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-google">{{-- <i class="mdi mdi-google"></i> --}}<p class="mb-0">Faculty of Business</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-twitter">{{-- <i class="mdi mdi-twitter"></i> --}}<p class="mb-0">Faculty of Law</p></div>
                    </div>
                    {{-- <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-linkedin"><i class="mdi mdi-linkedin"></i><p class="mb-0">Textile Engineering</p></div>
                    </div> --}}
                  </div>
                </div>
                
                <div class="col-12 d-flex align-items-stretch">
                  <div class="card w-100">
                    <div class="card-body px-3" style="height:333px">
                      <div class="d-flex align-items-center justify-content-between">
                        <h2 class="card-title">Teachers</h2>
                        <p class="mb-2">Salary</p>
                      </div>

                      @php
                        $all_teachers_info = DB::table('teacher_tbl')
                                                    ->get();
                      @endphp


                      @foreach($all_teachers_info as $v_teachers)
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-2">
                          <img src="{{URL::to($v_teachers->teacher_image)}}" alt="">
                        </div>
                        <div class="profile-name">{{$v_teachers->teacher_name}}</div>
                        <div class="current-progress ml-auto">{{$v_teachers->teacher_salary}}</div>
                      </div>
                      @endforeach
                      <div class="card-body text-primary d-flex flex-column align-items-center justify-content-center">
                      <a href="#" class="btn btn-outline-primary">View more</a>
                    </div>
                      {{-- <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-primary"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-danger"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-success"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-warning"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">450/900</div>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="card task-list w-100">
                <div class="card-body">
                  <h2 class="card-title">Seat remaining</h2>
                  <div class="task-cards selected">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">Total</p>
                      </div>
                      <p class="ticket-number ml-auto">143</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>CSE</small>
                        <small class="value">37</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>EEE</small>
                        <small class="value">23</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>BBA</small>
                        <small class="value">23</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>Law</small>
                        <small class="value">42</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>Textile</small>
                        <small class="value">18</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
                  </div>
                  <div class="task-cards">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">Faculty</p>
                      </div>
                      <p class="ticket-number ml-auto">3</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>Department</small>
                        <small class="value">5</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small>Clubs</small>
                        <small class="value">9</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
                  </div>
                  <div class="task-cards">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">Stablished</p>
                      </div>
                      <p class="ticket-number ml-auto">2003</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>Rupnagar R/A, Mirpur-2, Dhaka-1216, Bangladesh</small>
                        <small class="value">Campus</small>
                      </div>
                      {{-- <div class="status d-flex flex-column">
                        <small>STATUS</small>
                        <small class="value">Monday, 12pm</small>
                      </div> --}}
                      <i class="mdi mdi-delete-empty"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card user-visits w-100">
                    <div class="card-body">
                      <h2 class="card-title">User Visits</h2>
                      <div class="row mt-5">
                        <div class="col-6">
                          <p class="views text-muted">Views</p>
                          <p class="section">6080 sessions</p>
                          <a href="#" class="btn btn-outline-danger">More Details</a>
                        </div>
                        <div class="col-6">
                          <div id="sparkline-line-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 global-card">
                  <div class="card bg-warning w-100">
                    <div class="card-body text-white d-flex flex-column align-items-center justify-content-center">
                      <h2>Admission Open</h2>
                      <p>A Great University to Materialize Your Dream!</p>
                      <a href="{{URL::to('/add_students')}}" class="btn btn-outline-secondary">GET ADMISSION</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>

@endsection