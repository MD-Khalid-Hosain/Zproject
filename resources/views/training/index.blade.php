@extends('layouts.base')

@section('main-body')


        <a href="{{route('training.create')}}"><button class="talent-tracker--btn talent-tracker--new-job-btn">Add Training</button></a>
        <!-- table start -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                <h2 >Training Lists</h2>
                <p class="talent-tracker__bar"></p>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                <form action="/action_page.php">
                    <input class="talent-tracker__search-box" type="text" name="search" placeholder="Search..">
                </form>
            </div>
        </div>

        <table class="mt-4 mb-5">
            <tr>
                <th>ID</th>
                <th>Training Title</th>
                <th>Category</th>
                <th>Trainer</th>
                <th>Training Fees</th>
                <th>Action</th>
            </tr>

            @foreach ($trainings as $training)
            <tr>
                <td>{{$training->id}}</td>
                <td>{{$training->training_title}}</td>
                <td>{{$training->training_category}}</td>
                <td>{{$training->trainer_name}}</td>
                <td>{{$training->training_fees}}</td>

                <td>
                    <form action="{{ route('training.show', $training->id)}}" method="get" style="display:inline-block">
                        @csrf
                        @method('show')
                        <button class="talent-tracker--btn talent-tracker--action-btn">Details</button>
                    </form>

                    <form  onclick="return confirm('Do you really want to Edit this Guest information?')" action="{{ route('training.edit', $training->id)}}" method="get" style="display: inline-block">
                        @csrf
                        @method('edit')
                        <button  class="talent-tracker--btn talent-tracker--action-btn" type="submit">Edit</button>
                    </form>

                    <form  onclick="return confirm('Do you really want to delete this Guest?')"  action="{{ route('training.destroy', $training->id)}}" method="post" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="talent-tracker--btn talent-tracker--action-btn">Delete</button>
                    </form>
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

@endsection
