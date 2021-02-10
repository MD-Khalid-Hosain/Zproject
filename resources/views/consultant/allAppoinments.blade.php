@extends('layouts.base')

@section('main-body')
    <div class="col-lg-9 col-md-9 col-sm-12">
                <h1 class="mt-5">Appointments</h1>
                <p class="talent-tracker__bar mt-2"></p>

                <!-- table section start -->
                <table class="mt-4 mb-5">
                    <tr>
                        <th>Meeting ID</th>
                        <th>Meeting Date</th>
                        <th>Meeting Time</th>
                        <th>Cost Per Hour</th>
                        <th>Commission</th>
                        <th>Duration</th>
                    </tr>

                @foreach ($allAppoinments as $appoinment)

                    <tr>
                        <td>{{ $appoinment->id }}</td>
                        <td>{{ $appoinment->booking_date }}</td>
                        <td>{{ date('h:i a', strtotime($appoinment->time)) }}</td>
                        <td>{{ $appoinment->cost }}</td>
                        <td>{{ $appoinment->commission }}%</td>
                        <td>{{ App\Models\Appoinment::find($appoinment->user_id)->value('duration') }} Hours</td>
                    </tr>
                     @endforeach
                </table>
                <!-- table section end -->

                <!-- pagiation start -->
                <div class="talent-tracker__pagination mb-5">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                </div>
                <!-- pagiation end -->
            </div>
@endsection
