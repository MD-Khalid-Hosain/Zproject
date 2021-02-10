
@extends('layouts.base')

@section('main-body')
    <h2 class="mt-4">Consultant Profile</h2>
    <p class="talent-tracker__bar"></p>

    <table class="mt-4" style="width:70%">
        <tr>
            <th>Name:</th>
            <td>{{ $consultant->name }}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{ $consultant->email }}</td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td>{{ $consultant->phone }}</td>
        </tr>

    </table>

    <form action="{{ route('confirm.appoinment') }}" method="post">
    @csrf
    <input  type="hidden" name="consultant_id" value="{{ $consultant->id }}">
        <div class="row mt-5">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label class="job-post__form-field--title">Select a Date:</label>
                <div class="consultantProfile__datePickerArea">
                   <select class="job-post__form-field consultantProfile__fromField" name="booking_date">
                   @foreach ($allSchedule as $dateTime)
                    <option value="{{ $dateTime->schedule_date }}">{{ $dateTime->schedule_date }}</option>
                    @endforeach
                </select>
                </div>
                <label class="job-post__form-field--title">Select User:</label>
                <select class="job-post__form-field consultantProfile__fromField" name="user_id">

                @foreach ($thisConsultantUser as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>

                @endforeach

                </select>

                <label class="job-post__form-field--title">Cost Per Hour:</label>
                <input class="job-post__form-field consultantProfile__fromField" type="text" name="cost" placeholder="Cost Per Hour" >

                <label class="job-post__form-field--title">Talent Tracker Commission:</label>
                <select class="job-post__form-field consultantProfile__fromField" name="commission">
                    <option value="5">5%</option>
                    <option value="10">10%</option>
                    <option value="15">15%</option>
                    <option value="20">20%</option>
                    <option value="25">25%</option>
                </select>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <p class="job-post__form-field--title mb-3">Available Time Slot:</p>
                @foreach ($allSchedule as $dateTime)
                <label class="consultant__timeSlotContainer">{{ date('h:i a', strtotime($dateTime->from)) }} - {{ date('h:i a', strtotime($dateTime->to)) }}
                    <input type="radio" name="time" value="{{ $dateTime->from }} ">
                    <span class="consultant__timeSlotcheckmark"></span>
                </label>
                @endforeach

            </div>
        </div>
        <div class="talent-tracker__shortlist-btn--section mt-5">
            <button class="talent-tracker__shortlist-btn talent-tracker--btn applicant-profile__shortlist--btn">Book</button>
        </div>
    </form>
@endsection
