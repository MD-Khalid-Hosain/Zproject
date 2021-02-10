@extends('layouts.base')

@section('main-body')



        <h2 class="mt-4">Career Advisor Profile</h2>
        <p class="talent-tracker__bar"></p>

        <table class="mt-4" style="width:70%">
            <tr>
                <th>Name:</th>
                <td>Name of Advisor</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>user@user.com</td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td>0157458965</td>
            </tr>

        </table>

        <form action="#">
            <div class="row mt-5">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label class="job-post__form-field--title">Select a Date:</label>
                    <div class="consultantProfile__datePickerArea">
                        <input class="job-post__form-field consultantProfile__datePickerField" type="date" >
                        <img class="consultantProfile__calenderIcon" src="./../assets/images/icons/calendar.png" alt="calendar-icon">
                    </div>

                    <label class="job-post__form-field--title">Cost Per Hour:</label>
                    <input class="job-post__form-field consultantProfile__fromField" type="text" placeholder="Cost Per Hour" >

                    <label class="job-post__form-field--title">Talent Tracker Commission:</label>
                    <select class="job-post__form-field consultantProfile__fromField">
                        <option value="5">5%</option>
                        <option value="10">10%</option>
                        <option value="15">15%</option>
                        <option value="20">20%</option>
                        <option value="25">25%</option>
                    </select>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p class="job-post__form-field--title mb-3">Available Time Slot:</p>

                    <label class="consultant__timeSlotContainer">8AM - 10AM
                        <input type="radio" name="radio">
                        <span class="consultant__timeSlotcheckmark"></span>
                    </label>

                    <label class="consultant__timeSlotContainer">8AM - 10AM
                        <input type="radio" name="radio">
                        <span class="consultant__timeSlotcheckmark"></span>
                    </label>

                    <label class="consultant__timeSlotContainer">8AM - 10AM
                        <input type="radio" name="radio">
                        <span class="consultant__timeSlotcheckmark"></span>
                    </label>

                    <label class="consultant__timeSlotContainer">8AM - 10AM
                        <input type="radio" name="radio">
                        <span class="consultant__timeSlotcheckmark"></span>
                    </label>
                </div>
            </div>
            <div class="talent-tracker__shortlist-btn--section mt-5">
                <button class="talent-tracker__shortlist-btn talent-tracker--btn applicant-profile__shortlist--btn">Book</button>
            </div>
        </form>

@endsection
