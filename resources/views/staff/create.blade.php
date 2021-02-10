@extends('layouts.base')

@section('main-body')


    <h2 class="mt-4">Add New Staff</h2>
    <p class="talent-tracker__bar"></p>

    <form method="POST" action="{{route('staff.store')}}">
        @csrf
        <div class="row job-post__form--section mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label class="job-post__form-field--title" >Name</label>
                <input class="job-post__form-field" type="text" name="name" placeholder="Enter Name">


                <label class="job-post__form-field--title" >Email</label>
                <input class="job-post__form-field" name="email" type="email" placeholder="Email">

              

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <label class="job-post__form-field--title" >Phone</label>
                <input class="job-post__form-field" type="text" name="mobile_number" placeholder="Phone Number">



                <label class="job-post__form-field--title" >Password</label>
                <input class="job-post__form-field" type="password" name="password" placeholder="Password">
            </div>

            <input type="hidden" id="custId" name="role" value="2">


            <div class="job-post__submit--btn-area mt-3">
                <input class="talent-tracker--btn job-post__submit--btn" type="submit" value="Add New Staff">
            </div>
        </div>
    </form>



@endsection
