
@extends('layouts.parent')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Welcome {{ Session::get('name') }}'s Parent!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active">Parent</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>All Courses</h6>
                                    <h3>04/06</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ URL::to('assets/img/icons/teacher-icon-01.svg') }}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-12 col-12 dflex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>All Projects</h6>
                                    <h3>40/60</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{URL::to('assets/img/icons/teacher-icon-02.svg')}}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Test Attended</h6>
                                    <h3>30/50</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{URL::to('assets/img/icons/student-icon-01.svg')}}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Test Passed</h6>
                                    <h3>15/20</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{URL::to('assets/img/icons/student-icon-02.svg')}}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12 col-xl-14">
                    <div class="card flex-fill comman-shadow">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class="card-title">Today’s Lesson</h5>
                                </div>
                            </div>
                        </div>
                        <div class="dash-circle">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 dash-widget1">
                                    <div class="circle-bar circle-bar2">
                                        <div class="circle-graph2" data-percent="80">
                                            <b>80%</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="dash-details">
                                        <div class="lesson-activity">
                                            <div class="lesson-imgs">
                                                <img src="{{URL::to('assets/img/icons/lesson-icon-01.svg')}}" alt="">
                                            </div>
                                            <div class="views-lesson">
                                                <h5>Class</h5>
                                                <h4>Electrical Engg</h4>
                                            </div>
                                        </div>
                                        <div class="lesson-activity">
                                            <div class="lesson-imgs">
                                                <img src="{{URL::to('assets/img/icons/lesson-icon-02.svg')}}" alt="">
                                            </div>
                                            <div class="views-lesson">
                                                <h5>Lessons</h5>
                                                <h4>5 Lessons</h4>
                                            </div>
                                        </div>
                                        <div class="lesson-activity">
                                            <div class="lesson-imgs">
                                                <img src="{{URL::to('assets/img/icons/lesson-icon-03.svg')}}" alt="">
                                            </div>
                                            <div class="views-lesson">
                                                <h5>Time</h5>
                                                <h4>Lessons</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="dash-details">
                                        <div class="lesson-activity">
                                            <div class="lesson-imgs">
                                                <img src="{{URL::to('assets/img/icons/lesson-icon-04.svg')}}" alt="">
                                            </div>
                                            <div class="views-lesson">
                                                <h5>Asignment</h5>
                                                <h4>5 Asignment</h4>
                                            </div>
                                        </div>
                                        <div class="lesson-activity">
                                            <div class="lesson-imgs">
                                                <img src="{{URL::to('assets/img/icons/lesson-icon-05.svg')}}" alt="">
                                            </div>
                                            <div class="views-lesson">
                                                <h5>Staff</h5>
                                                <h4>John Doe</h4>
                                            </div>
                                        </div>
                                        <div class="lesson-activity">
                                            <div class="lesson-imgs">
                                                <img src="{{URL::to('assets/img/icons/lesson-icon-06.svg')}}" alt="">
                                            </div>
                                            <div class="views-lesson">
                                                <h5>Lesson Learned</h5>
                                                <h4>10/50</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col-12 col-lg-12 col-xl-12 d-flex">
                                        <div class="card flex-fill comman-shadow">
                                            <div class="card-header">
                                                <div class="row align-items-center">
                                                    <div class="col-6">
                                                        <h5 class="card-title">Learning Activity</h5>
                                                    </div>
                                                    <div class="col-6">
                                                        <ul class="chart-list-out">
                                                            <li><span class="circle-blue"></span>Teacher</li>
                                                            <li><span class="circle-green"></span>Student</li>
                                                            <li class="star-menus"><a href="javascript:;"><i
                                                                        class="fas fa-ellipsis-v"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="apexcharts-area"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
@endsection
