@extends('layouts.base')

@section('main-body')


    <h2 class="mt-4">Edit Training</h2>
    <p class="talent-tracker__bar"></p>

    <form action={{route('training.update',$training->id)}}   method="POST">
        @csrf
        @method('PUT')

        <div class="row job-post__form--section mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label class="job-post__form-field--title" >Training Title</label>
                <input class="job-post__form-field" type="text" placeholder="Title of Training" name="training_title" value="{{$training->training_title}}">


                <label class="job-post__form-field--title" >Topic Name</label>
                <input class="job-post__form-field" type="text" placeholder="Name of Topic" name="topics_name" value="{{$training->topics_name}}">

                <label class="job-post__form-field--title" >Trainer Name</label>
                <input class="job-post__form-field" type="text" placeholder="Name of Trainer" name="trainer_name" value="{{$training->trainer_name}}">

                <label class="job-post__form-field--title" >Training Category</label>
                <select name="training_category">
                    <option value="{{$training->training_category}}">{{$training->training_category}}</option>
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                </select>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">



                <label class="job-post__form-field--title" >Training Fees</label>
                <input class="job-post__form-field" type="text" placeholder="Ammount" name="training_fees" value="{{$training->training_fees}}">

                <label class="job-post__form-field--title" >Trainer Designation</label>
                <input class="job-post__form-field" type="text" placeholder="Trainer's Designation" name="trainer_designation" value="{{$training->trainer_designation}}">

                <label class="job-post__form-field--title" >Freelance Recruiter Commission</label>
                <select name="affiliate_commission">
                    <option default value="{{$training->affiliate_commission}}">{{$training->affiliate_commission}}</option>
                    <option value="5%">5%</option>
                    <option value="10%">10%</option>
                    <option value="15%">15%</option>
                    <option value="20%">20%</option>
                    <option value="25%">25%</option>
                </select>
            </div>

            <div class="job-post__submit--btn-area mt-3">
                <input class="talent-tracker--btn job-post__submit--btn" type="submit" value="Update Training">
            </div>
        </div>
    </form>
@endsection
