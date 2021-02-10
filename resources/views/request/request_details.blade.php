@extends('layouts.base')

@section('main-body')
    <div class="col-lg-10 col-md-10 col-sm-12">
                <div class="row mt-4">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>User Details</h2>
                        <p class="talent-tracker__bar mt-2"></p>

                        <p class="consultantRequest--details mt-4"><b>Name:</b> {{ $user_details->name }}</p>
                        <p class="consultantRequest--details"><b>Mobile:</b> {{ $user_details->mobile }}</p>
                        <p class="consultantRequest--details"><b>Email:</b> {{ $user_details->email }}</p>
                        <p class="consultantRequest--details"><b>Date Range:</b> {{ $user_details->from }} to {{ $user_details->to }}</p>
                        <p class="consultantRequest--details"><b>Duration:</b> {{ $user_details->duration }} Hours</p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Consultant Details</h2>
                        <p class="talent-tracker__bar mt-2"></p>

                        <p class="consultantRequest--details mt-4"><b>Consultant Name:</b> {{ $consultant_details->name }}</p>
                        <p class="consultantRequest--details"><b>Mobile:</b> {{ $consultant_details->phone }}</p>
                        <p class="consultantRequest--details"><b>Email</b> {{ $consultant_details->email }}</p>
                    </div>

                    <div class="talent-tracker__shortlist-btn--section mt-5">
                        <a href="#"><button class="talent-tracker__shortlist-btn talent-tracker--btn applicant-profile__shortlist--btn">Done</button></a>
                      </div>
                </div>
            </div>
@endsection


