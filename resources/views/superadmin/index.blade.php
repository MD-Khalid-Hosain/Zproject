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
                href="{{route('job.create')}}"><div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg1">
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
                href="./pages/clients.html"><div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg3">
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
                href="./pages/consultant.html"><div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg3">
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
                href="./pages/careeradvisor.html"><div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg2">
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
                href="./pages/staff.html"><div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg1">
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
                href="./pages/freelance.html"><div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg1">
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
                href="./pages/training.html"><div class="talent-tracker__dashboard--card talent-tracker__dashboard--card-bg2">
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
                <tr>
                    <td>Assistant Software Engineer</td>
                    <td>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Edit</button></a>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                    </td>
                </tr>
                <tr>
                    <td>Job Title</td>
                    <td>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Edit</button></a>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                    </td>
                </tr>
                <tr>
                    <td>Job Title</td>
                    <td>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Edit</button></a>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                    </td>
                </tr>
                <tr>
                    <td>Job Title</td>
                    <td>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Edit</button></a>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                    </td>
                </tr>
                <tr>
                    <td>Job Title</td>
                    <td>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Edit</button></a>
                        <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                    </td>
                </tr>
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

@endsection
