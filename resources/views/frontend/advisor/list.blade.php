
@extends('frontend.layouts.base')
@section('main-body')

 <div class="page__bg availableJobs__pageBg">
        <div class="container">
            <p class="pageSection__title pt-5">Consultant</p>
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

                @foreach ($advisors as $advisor)
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="careerAdvisor__cardArea">
                            <img class="careerAdvisor__cardImg" src="{{asset('images/consultant.webp')}}" alt="consultantImg"/>
                            <div class="careerAdvisor__cardItems">
                                <p class="careerAdvisor__name careerAdvisor__des">{{$advisor->name}}</p>
                                <p class="careerAdvisor__companyName careerAdvisor__des">Company Name</p>
                                <p class="careerAdvisor__designation careerAdvisor__des">Designation</p>
                                <p class="careerAdvisor__specialistField careerAdvisor__des">Career Advisor Specialist</p>
                                <p class="careerAdvisor__charge careerAdvisor__des">Hourly Charge: 1000 BDT</p>
                                <a href="{{ route('connect.show',$advisor->id) }}"><Button class="careerAdvisor__connect--btn details__btn mt-2">Connect</Button></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    </div>

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
