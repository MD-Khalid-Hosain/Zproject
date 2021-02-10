<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}} " sizes="14x16">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
</head>
<body>
<!-- top nav section start -->
<div class="container">
    <div class="talent-tracker__top-nav-section">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <a class="talent-tracker__logo" href="http://127.0.0.1:8000/admin"> <img src="{{asset('assets/images/talent-tracker-logo.webp')}}" alt="talent-tracker-logo" style="width:auto" loading="lazy"> </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <a href="{{route('logout')}}">
                    <button class="talent-tracker__logout--btn talent-tracker--btn">  Logout</button>
                </a>
            </div>
        </div>
    </div>

</div>
<!-- top nav section end -->

<div class="container">
    <div class="row">
        <!-- sidebar section start -->
        <div class="col-lg-3 col-md-3 col-sm-12">
            <ul class="talent-tracker__sidebar">
            <li><a href="{{route('loginsuperadmin')}}"> <span class="talent-tracker__sidebar--icon"> <img src="{{asset('./assets/images/icons/dashboard.png')}}" alt="sidebar-item-icon"> </span> Dashboard</a></li>
                <li><a href="{{route('job.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="{{asset('./assets/images/icons/jobs.png')}}" alt="sidebar-item-icon"> </span> Jobs</a></li>
                <li><a href="{{route('client.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="{{asset('./assets/images/icons/clients.png')}}" alt="sidebar-item-icon"> </span> Clients</a></li>
                <li><a href="{{route('jobSeeker.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="{{asset('./assets/images/icons/job-seeker.png')}}" alt="sidebar-item-icon"> </span> Job Seeker</a></li>
                <li><a href="{{route('consultant.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="{{asset('./assets/images/icons/consulting.png')}}" alt="sidebar-item-icon"> </span> Consultant</a></li>
                <li><a href="{{route('advisor.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="{{asset('./assets/images/icons/consulting.png')}}" alt="sidebar-item-icon"> </span> Career Advisor</a></li>
                <li><a href="{{route('jobSeeker.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="{{asset('./assets/images/icons/task.png')}}" alt="sidebar-item-icon"> </span> Shortlist</a></li>
                <li><a href="{{route('request.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="{{asset('./assets/images/icons/task.png')}}" alt="sidebar-item-icon"> </span> Requests</a></li>
                <li><a href="{{route('frecuiter.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="{{asset('./assets/images/icons/affiliate.png')}}" alt="sidebar-item-icon"> </span> Freelance Recruiter</a></li>
                <li><a href="{{route('training.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="{{asset('./assets/images/icons/training.png')}}" alt="sidebar-item-icon"> </span> Training</a></li>
               
              
                @if(Auth::user()->role == 1)
                <li><a href="{{route('staff.index')}}"> <span class="talent-tracker__sidebar--icon"> <img src="{{asset('assets/images/icons/staf.png')}}" alt="sidebar-item-icon"> </span> Management Staff</a></li>
                @endif

            </ul>
        </div>
        <!-- sidebar section end -->

        <div class="col-lg-9 col-md-9 col-sm-12 mt-4">

            @yield('main-body')

        </div>
    </div>
</div>

<!-- footer area start -->
<div class="container">
    <footer class="talent-tracker__footer-area">
        <p class="talent-tracker__footer-text">All Right Reserved &copy; TalentTracker</p>
    </footer>
</div>
<!-- footer area end -->
</body>
</html>
