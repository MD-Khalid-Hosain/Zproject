<?php

namespace App\Http\Controllers;

use App\Models\Jobseeker;
use Illuminate\Http\Request;

class JobseekerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jobseeker.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jobseeker  $jobseeker
     * @return \Illuminate\Http\Response
     */
    public function show(Jobseeker $jobseeker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobseeker  $jobseeker
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobseeker $jobseeker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jobseeker  $jobseeker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobseeker $jobseeker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobseeker  $jobseeker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobseeker $jobseeker)
    {
        //
    }
}
