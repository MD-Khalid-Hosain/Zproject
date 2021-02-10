@extends('frontend.layouts.base')

@section('main-body')

<div class="page__bg availableJobs__pageBg">
        <div class="container">
            <p class="pageSection__title pt-5">Avaiable Jobs</p>
            <p class="greyBar"></p>

            <div class="availableJobs__categorySection mt-4">
                <div class="row categorySection">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="p-4">
                            <input type="checkbox"/>
                            <label class="checkbox__label">Finance</label><br/>

                            <input type="checkbox"/>
                            <label class="checkbox__label"> Accounting </label><br/>

                            <input type="checkbox"/>
                            <label class="checkbox__label"> Supply Chain </label><br/>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="p-4">
                            <input type="checkbox"/>
                            <label className="checkbox__label"> Trade Marketing</label><br/>

                            <input type="checkbox"/>
                            <label className="checkbox__label"> Business Management </label><br/>

                            <input type="checkbox"/>
                            <label className="checkbox__label"> Marketing </label><br/>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="p-4">
                            <input type="checkbox"/>
                            <label className="checkbox__label"> Sales</label><br/>

                            <input type="checkbox"/>
                            <label className="checkbox__label"> HR </label><br/>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                   
                @foreach ($jobs as $job)
                   
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="avaiablejobs__jobCard">
                            <img class="avaiablejobs__jobIcon" src= "{{asset('/images/jobs/jobsIcon.webp')}}" alt="jobIcon"/>
                            <div class="avaiablejobs__jobDes">
                                <p class="availableJobs__jobTitle">{{$job->job_title}}</p>
                                <p class="availableJobs__jobCategory">{{$job->category}}</p>


                    <form action="{{ route('singlejob', $job->id)}}" method="get">
                        @csrf
                        @method('show')
                        <button class="availableJobs__btn details__btn mt-2">Details</button>
                    </form>
                     

                        </div>
                        </div>
                    </div>
                
                @endforeach

                    <!-- Pagination -->

                    <nav class="talentTracker__pagination mt-5">
                        <ul class="pagination ">
                          <li class="page-item">
                            <a class="page-link talentTracker__pagination--pagelink" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          <li class="page-item"><a class="page-link talentTracker__pagination--pagelink" href="#">1</a></li>
                          <li class="page-item"><a class="page-link talentTracker__pagination--pagelink" href="#">2</a></li>
                          <li class="page-item"><a class="page-link talentTracker__pagination--pagelink" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link talentTracker__pagination--pagelink" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection