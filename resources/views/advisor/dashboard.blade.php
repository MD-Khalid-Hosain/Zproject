@extends('layouts.dasbased')
@section('dash-main')
    <div class="row">
        <!-- sidebar section start -->
        <div class="col-lg-3 col-md-3 col-sm-12">
            <ul class="talent-tracker__sidebar">
                <li><a href="career-advisor-dashboard.html"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/dashboard.png" alt="sidebar-item-icon"> </span> Dashboard</a></li>
                <li><a href="./pages/career-advisor-pages/appointment.html"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/jobs.png" alt="sidebar-item-icon"> </span> Appoinments</a></li>
                <li><a href="./pages/career-advisor-pages/set-schedule.html"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/calendar-light.png" alt="sidebar-item-icon"> </span> Set Schedule</a></li>
                <li><a href="./pages/career-advisor-pages/all-meetings.html"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/task.png" alt="sidebar-item-icon"> </span> All Meetings</a></li>
            </ul>
        </div>
        <!-- sidebar section end -->

        <div class="col-lg-9 col-md-9 col-sm-12">

            <!-- dashboard card section start -->
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="./pages/career-advisor-pages/appointment.html">
                        <div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg1">
                            <ul class="talent-tracker__cardItems--area">
                                <li class="talent-tracker__dashboard-card--item">Appoinments</li>
                                <li class="talent-tracker__dashboard-card--item">100</li>
                                <li><img class="talent-tracker__dashboard--card-icon" src="assets/images/icons/jobs.png" alt="card-icon"></li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="./pages/career-advisor-pages/all-meetings.html">
                        <div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg3">
                            <ul class="talent-tracker__cardItems--area">
                                <li class="talent-tracker__dashboard-card--item">All Meetings</li>
                                <li class="talent-tracker__dashboard-card--item">100</li>
                                <li><img class="talent-tracker__dashboard--card-icon" src="assets/images/icons/clipboard.png" alt="card-icon"></li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
            <!-- dashboard card section end -->


            <h2 class="mt-5">Latest Appoinments</h2>
            <p class="talent-tracker__bar mt-2"></p>

            <!-- table section start -->
            <table class="mt-4 mb-5">
                <tr>
                    <th>Meeting ID</th>
                    <th>Meeting Date</th>
                    <th>Meeting Time</th>
                    <th>Cost Per Hour</th>
                    <th>Commission</th>
                    <th>Duration</th>
                </tr>

                <tr>
                    <td>001</td>
                    <td>10/12/2020</td>
                    <td>10:00</td>
                    <td>1000</td>
                    <td>10%</td>
                    <td>2 Hours</td>
                </tr>

                <tr>
                    <td>001</td>
                    <td>10/12/2020</td>
                    <td>10:00</td>
                    <td>1000</td>
                    <td>10%</td>
                    <td>2 Hours</td>
                </tr>

                <tr>
                    <td>001</td>
                    <td>10/12/2020</td>
                    <td>10:00</td>
                    <td>1000</td>
                    <td>10%</td>
                    <td>2 Hours</td>
                </tr>

                <tr>
                    <td>001</td>
                    <td>10/12/2020</td>
                    <td>10:00</td>
                    <td>1000</td>
                    <td>10%</td>
                    <td>2 Hours</td>
                </tr>

                <tr>
                    <td>001</td>
                    <td>10/12/2020</td>
                    <td>10:00</td>
                    <td>1000</td>
                    <td>10%</td>
                    <td>2 Hours</td>
                </tr>
            </table>
            <!-- table section end -->
        </div>
    </div>


@endsection
