
@extends('layouts.base')
@section('main-body')
    <h2 class="mt-4">Freelance Recruiter Profile</h2>
    <p class="talent-tracker__bar mt-2"></p>

    <div class="row mt-5">
        <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="profile--border profile--infoSection">
                <img class="freelancerProfile--img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/User_font_awesome.svg/1200px-User_font_awesome.svg.png" alt="Profile-Picture">
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="profile--border profile--infoSection">
                <h2>Freelance Info</h2>
                <p class="talent-tracker__bar mt-2"></p>
                <P class="mt-3 profile--infoItem"><b>Name:</b> Zulkar</P>
                <P class="profile--infoItem"><b>Email:</b> zuki@zuki.com</P>
                <P class="profile--infoItem"><b>Phone:</b> 01247874452</P>
                <P class="profile--infoItem"><b>Address:</b> Dhaka, Bangladesh</P>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 ">
            <div class="profile--border profile--infoSection">
                <h2>Total Bonus Earned</h2>
                <p class="talent-tracker__bar mt-2"></p>
                <P class="mt-3 profile--balance"> <span><img src="./../assets/images/icons/taka.png" alt="bdt-icon"></span> 1000</P>
            </div>
        </div>
    </div>
@endsection
