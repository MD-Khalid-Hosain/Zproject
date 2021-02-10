@extends('layouts.base')

@section('main-body')

            <p class="requestList__Title mt-4">Consultant & Career Advisor Apointment Requests</p>
            <p class="talent-tracker__bar"></p>

            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <h2 class="mt-5">Consultant</h2>
                  <p class="talent-tracker__bar"></p>
                  <table class="mt-3" style="width: 97%;">
                    <tr>
                      <th>User</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Consultant</th>
                      <th>Action</th>
                    </tr>

                    @foreach ($allAppoinment as $appoinment)
                    <tr>
                        <td>{{ $appoinment->name }}</td>
                        <td>{{ $appoinment->email }}</td>
                        <td>{{ $appoinment->mobile }}</td>
                        <td>{{ $appoinment->consultant_id }}</td>
                        <td>
                        <a href="./requests/consultant-request-details.html"><button class="talent-tracker--btn talent-tracker--action-btn">Pending</button></a>
                        <a href="{{ route('request.details',$appoinment->id ) }}"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                        </td>
                    </tr>
                    @endforeach



                  </table>
                  <div class="targetApplicant__shortlist-btn--section mt-5">
                    <a href="./requests/consultant-requests.html"><button class="talent-tracker__shortlist-btn talent-tracker--btn request__seeMore--btn">See More</button></a>
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                  <h2 class="mt-5">Career Advisor</h2>
                  <p class="talent-tracker__bar"></p>

                  <table class="mt-3" style="width: 97%;">
                    <tr>
                      <th>User</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Advisor</th>
                      <th>Action</th>
                    </tr>
                    <tr>
                      <td>Name of User</td>
                      <td>user@user.com</td>
                      <td>0154789654</td>
                      <td>Mr.X</td>
                      <td>
                      <a href="./requests/career-advisor-request details.html"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Name of User</td>
                      <td>user@user.com</td>
                      <td>0154789654</td>
                      <td>Mr.X</td>
                      <td>
                      <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Name of User</td>
                      <td>user@user.com</td>
                      <td>0154789654</td>
                      <td>Mr.X</td>
                      <td>
                      <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Name of User</td>
                      <td>user@user.com</td>
                      <td>0154789654</td>
                      <td>Mr.X</td>
                      <td>
                      <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Name of User</td>
                      <td>user@user.com</td>
                      <td>0154789654</td>
                      <td>Mr.X</td>
                      <td>
                      <a href="#"><button class="talent-tracker--btn talent-tracker--action-btn">Details</button></a>
                      </td>
                    </tr>
                  </table>
                  <div class="targetApplicant__shortlist-btn--section mt-5">
                    <a href="./requests/career-advisor-requests.html"><button class="talent-tracker__shortlist-btn talent-tracker--btn request__seeMore--btn">See More</button></a>
                  </div>
                </div>
              </div>
            </div>



@endsection
