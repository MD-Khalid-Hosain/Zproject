@extends('layouts.base')

@section('main-body')

        <a href="{{route('staff.create')}}"><button class="talent-tracker--btn talent-tracker--new-job-btn">Add New Staff</button></a>
        <!-- table start -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                <h2 >Staff Lists</h2>
                <p class="talent-tracker__bar"></p>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                <form action="/action_page.php">
                    <input class="talent-tracker__search-box" type="text" name="search" placeholder="Search..">
                </form>
            </div>
        </div>

        <table class="mt-4 mb-4">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>

            @foreach ($staffs as $staff)
            <tr>
                <td>{{$staff->id}}</td>
                <td>{{$staff->name}}</td>
                <td>{{$staff->email}}</td>
                <td>{{$staff->phone}}</td>
                <td>
                <form  onclick="return confirm('Do you really want to delete this Guest?')"  action="{{ route('staff.destroy', $staff->id)}}" method="post" style="display:inline-block">
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
        {!! $staffs->links() !!}

        <!-- {{ $staffs->links() }} -->


        <!-- pagiation end -->


@endsection
