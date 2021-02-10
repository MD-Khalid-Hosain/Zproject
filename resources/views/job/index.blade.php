@extends('layouts.base')

@section('main-body')

        <a href="{{route('job.create')}}"><button class="talent-tracker--btn talent-tracker--new-job-btn">Add New Jobs</button></a>
        <!-- table start -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                <h2 >Job Lists</h2>
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
                <th>Job Title</th>
                <th>Job Category</th>
                <th>Vacancy</th>
                <th>Company Title</th>
                <th>Action</th>
            </tr>


            @foreach ($jobs as $job)
                <tr>
                <td>{{$job->id}}</td>
                <td>{{$job->job_title}}</td>
                <td>{{$job->category}}</td>
                <td>{{$job->vacancy}}</td>
                <td>{{$job->company_title}}</td>
                <td>

                    <form action="{{ route('job.show', $job->id)}}" method="get" style="display:inline-block">
                        @csrf
                        @method('show')
                        <button class="talent-tracker--btn talent-tracker--action-btn">Details</button>
                    </form>

                    <form  onclick="return confirm('Do you really want to Edit this Guest information?')" action="{{ route('job.edit', $job->id)}}" method="get" style="display: inline-block">
                        @csrf
                        @method('edit')
                        <button  class="talent-tracker--btn talent-tracker--action-btn" type="submit">Edit</button>
                    </form>



                    <form  onclick="return confirm('Do you really want to delete this Guest?')"  action="{{ route('job.destroy', $job->id)}}" method="post" style="display:inline-block">
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

@endsection
