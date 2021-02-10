@extends('layouts.dasbased')
@section('dash-main')

    <div class="row">
        <!-- sidebar section start -->
        <div class="col-lg-3 col-md-3 col-sm-12">
            <ul class="talent-tracker__sidebar">
                <li><a href="{{route('loginconsultant')}}"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/dashboard.png" alt="sidebar-item-icon"> </span> Dashboard</a></li>
                <li><a href="{{ route('all.appoinment') }}"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/jobs.png" alt="sidebar-item-icon"> </span> Appoinments</a></li>
                <li><a href="{{ route('schedule') }}"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/calendar-light.png" alt="sidebar-item-icon"> </span> Set Schedule</a></li>
                <li><a href="./pages/consultant/all-meetings.html"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/task.png" alt="sidebar-item-icon"> </span> All Meetings</a></li>
            </ul>
        </div>
        <!-- sidebar section end -->

        @yield('main-body')
    </div>
@endsection

