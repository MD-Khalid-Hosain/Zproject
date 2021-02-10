@extends('layouts.dasbased')
@section('dash-main')
    <div class="row">
        <!-- sidebar section start -->
        <div class="col-lg-3 col-md-3 col-sm-12">
            <ul class="talent-tracker__sidebar">
                <li><a href="{{route('loginsuperadmin')}}"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/dashboard.png" alt="sidebar-item-icon"> </span> Dashboard</a></li>
                <li><a href="{{route('job.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/jobs.png" alt="sidebar-item-icon"> </span> Jobs</a></li>
                <li><a href="{{route('client.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/clients.png" alt="sidebar-item-icon"> </span> Clients</a></li>
                <li><a href="{{route('jobSeeker.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/job-seeker.png" alt="sidebar-item-icon"> </span> Job Seeker</a></li>
                <li><a href="{{route('consultant.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/consulting.png" alt="sidebar-item-icon"> </span> Consultant</a></li>
                <li><a href="{{route('advisor.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/consulting.png" alt="sidebar-item-icon"> </span> Career Advisor</a></li>
                <li><a href="{{route('jobSeeker.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/task.png" alt="sidebar-item-icon"> </span> Shortlist</a></li>
                <li><a href="{{route('request.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/task.png" alt="sidebar-item-icon"> </span> Requests</a></li>
                <li><a href="{{route('frecuiter.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/affiliate.png" alt="sidebar-item-icon"> </span> Freelance Recruiter</a></li>
                <li><a href="{{route('training.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/training.png" alt="sidebar-item-icon"> </span> Training</a></li>
               
                @if(Auth::user()->role == 1)
                <li><a href="{{route('staff.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/staf.png" alt="sidebar-item-icon"> </span> Management Staff</a></li>
                 @endif


            </ul>
        </div>
        <!-- sidebar section end -->

        <div class="col-lg-9 col-md-9 col-sm-12">

            <!-- dashboard card section start -->
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a
                            href="{{route('job.index')}}"><div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg2">
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
                            href="{{route('consultant.index')}}"><div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg3">
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
                            href="{{route('advisor.index')}}"><div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg2">
                            <ul>
                                <li class="talent-tracker__dashboard-card--item">Career Advisor</li>
                                <li class="talent-tracker__dashboard-card--item">100</li>
                                <li><img class="talent-tracker__dashboard--card-icon" src="assets/images/icons/consulting.png" alt="card-icon"></li>
                            </ul>
                        </div>
                    </a>
                </div>

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

            <!-- dashboard table section start -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2 class="mt-5">Latest Jobs</h2>
                    
                    <table class="mt-4 mb-5">
                        <tr>
                            <th>Job Title</th>
                            <th>Action</th>
                        </tr>
                 
                   

            @foreach ($jobs as $job)
                <tr>
          
                <td>{{$job->job_title}}</td>
          
                <td>

                    <form action="{{ route('job.show', $job->id)}}" method="get" style="display:inline-block">
                        @csrf
                        @method('show')
                        <button class="talent-tracker--btn talent-tracker--action-btn">Details</button>
                    </form>

               

                    <form  onclick="return confirm('Do you really want to delete this Guest?')"  action="{{ route('job.destroy', $job->id)}}" method="post" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="talent-tracker--btn talent-tracker--action-btn">Delete</button>
                    </form>

                </td>
            </tr>

            @endforeach
                      
                   
                   
                    </table>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2 class="mt-5">New Clients</h2>
                    <table class="mt-4 mb-5">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>client@client.com</td>
                            <td>01547895547</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>client@client.com</td>
                            <td>01547895547</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>client@client.com</td>
                            <td>01547895547</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>client@client.com</td>
                            <td>01547895547</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>client@client.com</td>
                            <td>01547895547</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- dashboard table section end -->
        </div>
    </div>


@endsection
