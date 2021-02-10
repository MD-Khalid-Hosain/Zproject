@extends('layouts.dasbased')
@section('dash-main')



    <div class="row">
        <!-- sidebar section start -->
        <div class="col-lg-3 col-md-3 col-sm-12">
            <ul class="talent-tracker__sidebar">
                <li><a href="freelance-recruiter-dashboard.html"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/dashboard.png" alt="sidebar-item-icon"> </span> Dashboard</a></li>
                <li><a href="./pages/freelance-recruiter/jobs.html"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/jobs.png" alt="sidebar-item-icon"> </span> Jobs</a></li>
                <li><a href="./pages/freelance-recruiter/training.html"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/training.png" alt="sidebar-item-icon"> </span> Training</a></li>
                <li><a href="./pages/freelance-recruiter/balance.html"> <span class="talent-tracker__sidebar--icon"> <img src="assets/images/icons/bdt-icon-light.png" alt="sidebar-item-icon"> </span> Balance</a></li>
            </ul>
        </div>
        <!-- sidebar section end -->

        <div class="col-lg-9 col-md-9 col-sm-12">

            <!-- dashboard card section start -->
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="./pages/freelance-recruiter/jobs.html">
                        <div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg1">
                            <ul class="talent-tracker__cardItems--area">
                                <li class="talent-tracker__dashboard-card--item">Jobs</li>
                                <li class="talent-tracker__dashboard-card--item">100</li>
                                <li><img class="talent-tracker__dashboard--card-icon" src="assets/images/icons/jobs.png" alt="card-icon"></li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="./pages/freelance-recruiter/training.html">
                        <div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg3">
                            <ul class="talent-tracker__cardItems--area">
                                <li class="talent-tracker__dashboard-card--item">Training</li>
                                <li class="talent-tracker__dashboard-card--item">100</li>
                                <li><img class="talent-tracker__dashboard--card-icon" src="assets/images/icons/training.png" alt="card-icon"></li>
                            </ul>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="./pages/freelance-recruiter/balance.html">
                        <div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg2">
                            <ul class="talent-tracker__cardItems--area">
                                <li class="talent-tracker__dashboard-card--item">Balance</li>
                                <li class="talent-tracker__dashboard-card--item">100000 BDT</li>
                                <li><img class="talent-tracker__dashboard--card-icon" src="assets/images/icons/bdt-icon-light.png" alt="card-icon"></li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
            <!-- dashboard card section end -->


            <h2 class="mt-5">Latest Jobs</h2>
            <p class="talent-tracker__bar mt-2"></p>

            <!-- table section start -->
            <table class="mt-4 mb-5">
                <tr>
                    <th>Jobs ID</th>
                    <th>Job Title</th>
                    <th>Job Category</th>
                    <th>Commission</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td>001</td>
                    <td>Title of Jobs</td>
                    <td>Marketing</td>
                    <td>10%</td>
                    <td>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    </td>
                </tr>

                <tr>
                    <td>001</td>
                    <td>Title of Jobs</td>
                    <td>Marketing</td>
                    <td>10%</td>
                    <td>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    </td>
                </tr>

                <tr>
                    <td>001</td>
                    <td>Title of Jobs</td>
                    <td>Marketing</td>
                    <td>10%</td>
                    <td>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    </td>
                </tr>

                <tr>
                    <td>001</td>
                    <td>Title of Jobs</td>
                    <td>Marketing</td>
                    <td>10%</td>
                    <td>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    </td>
                </tr>

                <tr>
                    <td>001</td>
                    <td>Title of Jobs</td>
                    <td>Marketing</td>
                    <td>10%</td>
                    <td>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    </td>
                </tr>


            </table>
            <!-- table section end -->


            <h2 class="mt-5">Latest Training</h2>
            <p class="talent-tracker__bar mt-2"></p>

            <!-- table section start -->
            <table class="mt-4 mb-5">
                <tr>
                    <th>Training ID</th>
                    <th>Training Title</th>
                    <th>Training Category</th>
                    <th>Commission</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td>001</td>
                    <td>Title of Training</td>
                    <td>Marketing</td>
                    <td>10%</td>
                    <td>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    </td>
                </tr>

                <tr>
                    <td>001</td>
                    <td>Title of Training</td>
                    <td>Marketing</td>
                    <td>10%</td>
                    <td>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    </td>
                </tr>

                <tr>
                    <td>001</td>
                    <td>Title of Training</td>
                    <td>Marketing</td>
                    <td>10%</td>
                    <td>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    </td>
                </tr>

                <tr>
                    <td>001</td>
                    <td>Title of Training</td>
                    <td>Marketing</td>
                    <td>10%</td>
                    <td>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    </td>
                </tr>

                <tr>
                    <td>001</td>
                    <td>Title of Training</td>
                    <td>Marketing</td>
                    <td>10%</td>
                    <td>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    </td>
                </tr>
            </table>
            <!-- table section end -->
        </div>
    </div>

@endsection

