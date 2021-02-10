
@extends('frontend.layouts.base')

@section('main-body')


    <div class="container">
        <p class="pageSection__title pt-5">Job Details</p>
        <p class="greyBar"></p>
        <p class="mt-5 jobDetails__title">Job Title : {{$job->job_title}} </p>
    <p class="jobDetails__des">Category : {{$job->category}} </p>
       <p class="jobDetails__des">Vacancy : {{$job->vacancy}} </p>
      <p class="jobDetails__des">Salary Range : {{$job->salary}} </p> 

      
        <iframe class="mt-5 jobDetails__pdfViewer" src="{{asset('/images/'. $job->details_image)}}" frameborder="0" ></iframe>

        <div class="text-center mt-5">
            <Button class="grdiantBtn jobDetails__btn" type="submit"> Apply Now </Button>
        </div>
    </div>

    @endsection