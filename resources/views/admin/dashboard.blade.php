@extends('layouts.base')

@section('main-body')

    <!-- dashboard card section start -->
    <div class="row">

        <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="{{route('job.index')}}"><div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg2">
                    <ul>
                        <li class="talent-tracker__dashboard-card--item">Jobs</li>
                        <li class="talent-tracker__dashboard-card--item">100</li>
                        <li><img class="talent-tracker__dashboard--card-icon" src="assets/images/icons/jobs.png" alt="card-icon"></li>
                    </ul>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
            <a
                    href="{{route('jobSeeker.index')}}"><div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg1">
                    <ul>
                        <li class="talent-tracker__dashboard-card--item">Job Seeker</li>
                        <li class="talent-tracker__dashboard-card--item">100</li>
                        <li><img class="talent-tracker__dashboard--card-icon" src="assets/images/icons/job-seeker.png" alt="card-icon"></li>
                    </ul>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
            <a
                    href="{{route('client.index')}}"><div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg3">
                    <ul>
                        <li class="talent-tracker__dashboard-card--item">Clients</li>
                        <li class="talent-tracker__dashboard-card--item">100</li>
                        <li><img class="talent-tracker__dashboard--card-icon" src="assets/images/icons/clients.png" alt="card-icon"></li>
                    </ul>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
            <a
                    href="{{route('jobSeeker.index')}}"><div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg3">
                    <ul>
                        <li class="talent-tracker__dashboard-card--item">Consultant</li>
                        <li class="talent-tracker__dashboard-card--item">100</li>
                        <li><img class="talent-tracker__dashboard--card-icon" src="assets/images/icons/consulting.png" alt="card-icon"></li>
                    </ul>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
            <a
                    href="{{route('jobSeeker.index')}}"><div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg2">
                    <ul>
                        <li class="talent-tracker__dashboard-card--item">Career Advisor</li>
                        <li class="talent-tracker__dashboard-card--item">100</li>
                        <li><img class="talent-tracker__dashboard--card-icon" src="assets/images/icons/consulting.png" alt="card-icon"></li>
                    </ul>
                </div>
            </a>
        </div>

        @if(Auth::user()->role == 1)
        <div class="col-lg-4 col-md-6 col-sm-12">
            <a
                    href="{{route('staff.index')}}"><div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg1">
                    <ul>
                        <li class="talent-tracker__dashboard-card--item">Management Staff</li>
                        <li class="talent-tracker__dashboard-card--item">100</li>
                        <li><img class="talent-tracker__dashboard--card-icon" src="assets/images/icons/staf.png" alt="card-icon"></li>
                    </ul>
                </div>
            </a>
        </div>
        @endif

        <div class="col-lg-4 col-md-6 col-sm-12">
            <a
                    href="{{route('frecuiter.index')}}"><div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg1">
                    <ul>
                        <li class="talent-tracker__dashboard-card--item">Freelance Recruiter</li>
                        <li class="talent-tracker__dashboard-card--item">100</li>
                        <li><img class="talent-tracker__dashboard--card-icon" src="assets/images/icons/affiliate.png" alt="card-icon"></li>
                    </ul>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
            <a
                    href="{{route('training.index')}}"><div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg2">
                    <ul>
                        <li class="talent-tracker__dashboard-card--item">Training</li>
                        <li class="talent-tracker__dashboard-card--item">100</li>
                        <li><img class="talent-tracker__dashboard--card-icon" src="assets/images/icons/training.png" alt="card-icon"></li>
                    </ul>
                </div>
            </a>
        </div>

    </div>
    <!-- dashboard card section end -->


@endsection
