@extends('layouts.base')

@section('main-body')

        <h2 class="mt-4">Job Details</h2>
        <p class="talent-tracker__bar"></p>

        <table class="mt-4" style="width:70%">
            <tr>
                <th>Job Title:</th>
                <td>Title of Job</td>
            </tr>
            <tr>
                <th>Job Location:</th>
                <td>Dhaka</td>
            </tr>
            <tr>
                <th>Salary:</th>
                <td>100000</td>
            </tr>
            <tr>
                <th>Vacancy:</th>
                <td>02</td>
            </tr>
            <tr>
                <th>Job Category:</th>
                <td>Marketing</td>
            </tr>
        </table>


        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                <h2 class="mt-3">Shortlist</h2>
                <p class="talent-tracker__bar"></p>
                <h3 class="mt-4">Total Applicant: 100</h3>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                <form action="/action_page.php">
                    <input class="talent-tracker__search-box" type="text" name="search" placeholder="Search..">
                </form>
            </div>
        </div>

        <table class="mt-4 mb-5">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>Name of Applicant</td>
                <td>user@user.com</td>
                <td>01754874412</td>
                <td>
                    <a href="./../applicants/applicant-profile.html"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                </td>
            </tr>
            <tr>
                <td>Name of Applicant</td>
                <td>user@user.com</td>
                <td>01754874412</td>
                <td>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                </td>
            </tr>
            <tr>
                <td>Name of Applicant</td>
                <td>user@user.com</td>
                <td>01754874412</td>
                <td>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                </td>
            </tr>
            <tr>
                <td>Name of Applicant</td>
                <td>user@user.com</td>
                <td>01754874412</td>
                <td>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                </td>
            </tr>
            <tr>
                <td>Name of Applicant</td>
                <td>user@user.com</td>
                <td>01754874412</td>
                <td>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                </td>
            </tr>
        </table>

        <!-- pagiation start -->
        <div class="talent-tracker__pagination mb-5">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
        <!-- pagiation end -->

@endsection
