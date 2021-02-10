<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App;
use Response;
use View;
use Validator;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $jobs=DB::table('jobs')->latest()->paginate(5);
        return  view('job.index',compact(['jobs']));

    }

    public function dashboard()
    {
        $jobs=DB::table('jobs')->latest()->paginate(5);
        return  view('superadmin.dashboard',compact(['jobs']));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $file = $request->file('details_image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/images/';
            $file->move($destinationPath, $fileName);

            $job = new Job([
                'job_title' => $request->get('job_title'),
                'vacancy' => $request->get('vacancy'),
                'location' => $request->get('location'),
                'salary' => $request->get('salary'),
                'category' => $request->get('category'),
                'commission' => $request->get('commission'),
                'company_title' => $request->get('company_title'),
                'details_image' => $fileName,
            ]);
            $job->save();

        return redirect ('job')->with('success', 'Room Information saved!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobs=Job::find($id);
        return view::make('job.show')->with('jobs',$jobs);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobs=Job::find($id);
        return view::make('job.edit')->with('jobs',$jobs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,  $id)
    {

        $request->validate([
            'job_title'=>'required']);

        $job=Job::find($id);
        $job->job_title= $request->get('job_title');
        $job->vacancy= $request->get('vacancy');
        $job->location= $request->get('location');
        $job->salary= $request->get('salary');
        $job->category= $request->get('category');
        $job->commission= $request->get('commission');
        $job->company_title= $request->get('company_title');

        $job->save();
        return redirect ('/job')->with('success', 'Room Information saved!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job=Job::find($id);
        $job->delete();
        return redirect ('job')->with('delete', 'Job Information Deleted!');
    }


    public function  joblist()
    {
        $jobs=DB::table('jobs')->latest()->paginate(5);
        return  view('frontend.jobs.joblist',compact(['jobs']));
    }

    public function singlejob($id)
    {
        $job=Job::find($id);
        return view::make('frontend.jobs.singlejob')->with('job',$job);
    }

}
