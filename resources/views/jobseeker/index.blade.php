@extends('layouts.base')
@section('main-body')



        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
                <h2>All Jobs</h2>
                <p class="talent-tracker__bar"></p>
                <div class="jobseeker__working-area--checkbox">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <input type="checkbox" value="Finance">
                            <label > Finance</label><br><br>

                            <input type="checkbox" value="Accounting">
                            <label > Accounting</label><br><br>

                            <input type="checkbox" value="Supply Chain">
                            <label > Supply Chain</label><br>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <input type="checkbox" value="Trade Marketing">
                            <label >Trade Marketing</label><br><br>

                            <input type="checkbox" value="Business Management">
                            <label >Business Management</label><br><br>

                            <input type="checkbox" value="Marketing">
                            <label >Marketing</label><br>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <input type="checkbox" value="Sales">
                            <label >Sales</label><br><br>

                            <input type="checkbox" value="HR">
                            <label >HR</label><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                <h2 >List of Job Seeker</h2>
                <p class="talent-tracker__bar"></p>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                <form action="/action_page.php">
                    <input class="talent-tracker__search-box" type="text" name="search" placeholder="Search..">
                </form>
            </div>
        </div>


        <!-- table start -->
        <table class="mt-4 mb-5">
            <tr>
                <th>Name</th>
                <th>Working Area</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>Name of Jobseeker</td>
                <td>Marketing</td>
                <td>01578458896</td>
                <td>employee@employee.com</td>
                <td>
                    <a href="./applicants/target-applicant-profile.html"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                </td>
            </tr>
            <tr>
                <td>Name of Jobseeker</td>
                <td>HR</td>
                <td>01578458896</td>
                <td>employee@employee.com</td>
                <td>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                </td>
            </tr>
            <tr>
                <td>Name of Jobseeker</td>
                <td>Accounting</td>
                <td>01578458896</td>
                <td>employee@employee.com</td>
                <td>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                </td>
            </tr>
            <tr>
                <td>Name of Jobseeker</td>
                <td>Marketing</td>
                <td>01578458896</td>
                <td>employee@employee.com</td>
                <td>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                </td>
            </tr>
            <tr>
                <td>Name of Jobseeker</td>
                <td>Sales</td>
                <td>01578458896</td>
                <td>employee@employee.com</td>
                <td>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                </td>
            </tr>
        </table>
        <!-- table end -->

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
