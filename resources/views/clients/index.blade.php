@extends('layouts.base')

@section('main-body')




        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                <h2 >Clients</h2>
                <p class="talent-tracker__bar"></p>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                <form action="/action_page.php">
                    <input class="talent-tracker__search-box" type="text" name="search" placeholder="Search..">
                </form>
            </div>
        </div>

        <!-- table start -->
        <table class="mt-4 mb-5">
            <tr>
                <th>Client Name</th>
                <th>Company Title</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            @foreach ($clients as $client)
            <tr>
                <td>{{$client->contact_designation}}</td>
                <td>{{$client->company_name}}</td>
                <td>{{$client->contact_mobile}}</td>
                <td>{{$client->contact_email}}</td>


                <td>
                    <form class="talent-tracker--btn talent-tracker--action-btn" action="{{ route('client.show', $client->id)}}" method="get" style="display:inline-block">
                        @csrf
                        @method('show')
                        <button class="talent-tracker--btn talent-tracker--action-btn">Details</button>
                    </form>

                    <form  onclick="return confirm('Do you really want to delete this Guest?')"  action="{{ route('client.destroy', $client->id)}}" method="post" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="talent-tracker--btn talent-tracker--action-btn">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </table>
        <!-- table end -->

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
