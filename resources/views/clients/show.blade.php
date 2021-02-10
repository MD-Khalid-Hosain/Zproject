@extends('layouts.base')

@section('main-body')



        <!-- table start -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                <h1 >Clients Profile</h1>
                <p class="talent-tracker__bar mt-1"></p>
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2 class="clientProfile__Title"> Company Details </h2>
                <p class="talent-tracker__bar mt-1"></p>
                <table class="mt-4" style="width:100%">
                    <tr>
                        <th>Company Name:</th>
                        <td>{{$client->company_name}}</td>
                    </tr>
                    <tr>
                        <th>Industry Type:</th>
                        <td>{{$client->company_name}}</td>
                    </tr>
                    <tr>
                        <th>Address:</th>
                        <td>{{$client->company_district}}, {{$client->company_country}} </td>
                    </tr>
                    <tr>
                        <th>Website:</th>
                        <td>{{$client->business_web}}</td>
                    </tr>
                </table>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2 class="clientProfile__Title"> Contact Person Details </h2>
                <p class="talent-tracker__bar mt-1"></p>
                <table class="mt-4" style="width:100%">
                    <tr>
                        <th>Name:</th>
                        <td>{{$client->contact_person}}</td>
                    </tr>
                    <tr>
                        <th>Designation:</th>
                        <td>{{$client->contact_designation}}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{$client->contact_email}}</td>
                    </tr>
                    <tr>
                        <th>Phone:</th>
                        <td>{{$client->contact_mobile}}</td>
                    </tr>
                </table>
            </div>
        </div>

@endsection