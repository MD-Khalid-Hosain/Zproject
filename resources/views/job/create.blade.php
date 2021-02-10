@extends('layouts.base')

@section('main-body')

        <h2 class="mt-4">Post a New Job</h2>
        <p class="talent-tracker__bar"></p>
        <form action="{{route('job.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row job-post__form--section mt-4">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label class="job-post__form-field--title" >Job Title</label>
                    <input class="job-post__form-field" type="text" placeholder="Job Title" name="job_title">

                    <label class="job-post__form-field--title" >Job Location</label>
                    <input class="job-post__form-field" type="text" placeholder="Job Location" name="location">


                    <label class="job-post__form-field--title" >Job Category</label>
                    <select name="category">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>
                </div>
                                            
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label class="job-post__form-field--title" >Vacancy</label>
                    <input class="job-post__form-field" type="text" placeholder="Job Title" name="vacancy">

                    <label class="job-post__form-field--title" >Salary</label>
                    <input class="job-post__form-field" type="text" placeholder="Job Title" name="salary">

                    <label class="job-post__form-field--title" >Company Title</label>
                    <input class="job-post__form-field" type="text" placeholder="Company Title" name="company_title">


                    <label class="job-post__form-field--title" >Freelance Recruiter Commission</label>
                    <select name="commission">
                        <option value="5%">5%</option>
                        <option value="10%">10%</option>
                        <option value="15%">15%</option>
                        <option value="20%">20%</option>
                        <option value="25%">25%</option>
                    </select>
                </div>

                <div class="col-lg-12 col md-12 col-sm-12">
                    <label class="job-post__form-field--title" >Job Details</label>
                    <input class="job-post__form-field" type="file" name="details_image">
                </div>

                <div class="job-post__submit--btn-area mt-3">
                    <input class="talent-tracker--btn job-post__submit--btn" type="submit" value="Post a Job">
                </div>
            </div>
        </form>

@endsection
