@extends('layouts.base')

@section('main-body')

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                <h2 >List of Freelancer</h2>
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
                <th>ID</th>
                <th>Freelancer Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>123</td>
                <td>Name of Freelancer</td>
                <td>user@user.com</td>
                <td>01254789654</td>
                <td>
                    <a href="{{route('frecuiter.show',1)}}"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
            </tr>
            <tr>
                <td>123</td>
                <td>Name of Freelancer</td>
                <td>user@user.com</td>
                <td>01254789654</td>
                <td>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
            </tr>
            <tr>
                <td>123</td>
                <td>Name of Freelancer</td>
                <td>user@user.com</td>
                <td>01254789654</td>
                <td>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
            </tr>
            <tr>
                <td>123</td>
                <td>Name of Freelancer</td>
                <td>user@user.com</td>
                <td>01254789654</td>
                <td>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
            </tr>
            <tr>
                <td>123</td>
                <td>Name of Freelancer</td>
                <td>user@user.com</td>
                <td>01254789654</td>
                <td>
                    <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
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
