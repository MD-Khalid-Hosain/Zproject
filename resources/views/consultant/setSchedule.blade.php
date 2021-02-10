@extends('consultant/consultantbody')
@section('main-body')

<div class="col-lg-9 col-md-9 col-sm-12">
    <h1 class="mt-5">Set Schedule</h1>
    <p class="talent-tracker__bar mt-2"></p>

    <form action="{{ route('consultant.store') }}" method="post">
    @csrf
        <div class="row job-post__form--section mt-4">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <label class="job-post__form-field--title">Select a Date:</label>
                <div class="consultantProfile__datePickerArea">
                    <input class="job-post__form-field consultantProfile__datePickerField" type="date" name="schedule_date">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <label class="job-post__form-field--title">From:</label>
                <input class="job-post__form-field" type="time" placeholder="Name of Topic" name="from">
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <label class="job-post__form-field--title">To:</label>
                <input class="job-post__form-field" type="time" placeholder="Name of Topic" name="to">
            </div>

            <div class="job-post__submit--btn-area mt-5">
                <input class="talent-tracker--btn job-post__submit--btn" type="submit" value="Add Training">
            </div>
        </div>
    </form>
</div>
@endsection
