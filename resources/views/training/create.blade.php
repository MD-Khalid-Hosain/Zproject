@extends('layouts.base')

@section('main-body')


        <h2 class="mt-4">Add New Training</h2>
        <p class="talent-tracker__bar"></p>

        <form action="{{route('training.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row job-post__form--section mt-4">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label class="job-post__form-field--title" >Training Title</label>
                    <input class="job-post__form-field" type="text" placeholder="Title of Training" name="training_title">

                    <label class="job-post__form-field--title" >Trainer Name</label>
                    <input class="job-post__form-field" type="text" placeholder="Name of Trainer" name="trainer_name">

                    <label class="job-post__form-field--title" >Training Category</label>
                    <select name="training_category">
                        <option value="australia">IT</option>
                        <option value="canada">Marketing</option>
                        <option value="usa">Management</option>
                    </select>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">



                    <label class="job-post__form-field--title" >Training Fees</label>
                    <input class="job-post__form-field" type="text" placeholder="Ammount" name="training_fees">

                    <label class="job-post__form-field--title" >Trainer Designation</label>
                    <input class="job-post__form-field" type="text" placeholder="Trainer's Designation" name="trainer_designation">

                    <label class="job-post__form-field--title" >Freelance Recruiter Commission</label>
                    <select name="affiliate_commission">
                        <option value="5%">5%</option>
                        <option value="10%">10%</option>
                        <option value="15%">15%</option>
                        <option value="20%">20%</option>
                        <option value="25%">25%</option>
                    </select>
                </div>

                <label class="job-post__form-field--title" >Upload PDF Document</label>
                    <input type="file" name="traning_file" class="job-post__form-field"> 
                    
                <div class="job-post__submit--btn-area mt-3">
                    <input class="talent-tracker--btn job-post__submit--btn" type="submit" value="Add Training">
                </div>
            </div>
        </form>
@endsection
