@extends('layouts.base')

@section('main-body')


        <!-- table start -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                <h2 >Applicant Shortlist By Company</h2>
                <p class="talent-tracker__bar mt-2"></p>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                <form action="/action_page.php">
                    <input class="talent-tracker__search-box" type="text" name="search" placeholder="Search..">
                </form>
            </div>
        </div>

        <table class="mt-4 mb-5">
            <tr>
                <th>Job Title</th>
                <th>Company Name</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>Title of Job</td>
                <td>X Company Ltd</td>
                <td>
                    <a href="{{route('shortlist.show',1)}}"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                </td>
            </tr>
            <tr>
                <td>Title of Job</td>
                <td>X Company Ltd</td>
                <td>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                </td>
            </tr>
            <tr>
                <td>Title of Job</td>
                <td>X Company Ltd</td>
                <td>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                </td>
            </tr>
            <tr>
                <td>Title of Job</td>
                <td>X Company Ltd</td>
                <td>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Delete</button></a>
                </td>
            </tr>
            <tr>
                <td>Title of Job</td>
                <td>X Company Ltd</td>
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
