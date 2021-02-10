<?php

namespace App\Http\Controllers;

use App\Models\Appoinment;
use App\Models\Consultant;
use App\Models\ConsultantBooking;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ConsultantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allConsultant = User::where('role',4)->get();
        return view('consultant.index', compact('allConsultant'));
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
        Consultant::create([
            'consultant_id' => 1,
            'schedule_date' => $request->schedule_date,
            'from' => $request->from,
            'to' => $request->to,
            'created_at' => Carbon::now(),
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consultant  $consultant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultant = User::find($id);
        $thisConsultantUser = Appoinment::where('consultant_id', $id)->get();
        $allSchedule = Consultant::where('consultant_id', $id)->get();
        return view('consultant.show',compact('consultant', 'thisConsultantUser', 'allSchedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consultant  $consultant
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultant $consultant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consultant  $consultant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultant $consultant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consultant  $consultant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultant $consultant)
    {
        //
    }


    public function meeting(){
        return view('consultant.allmeeting');
    }
    public function setSchedule()
    {
        return view('consultant.setSchedule');
    }

    public function confirmAppoinment(Request $request){

        ConsultantBooking::create([
            'consultant_id' =>$request->consultant_id,
            'user_id' => $request->user_id,
            'booking_date' => $request->booking_date,
            'cost' => $request->cost,
            'commission' => $request->commission,
            'time' => $request->time,
        ]);

        return back();
    }
    public function allAppoinments(){
        $allAppoinments = ConsultantBooking::where('consultant_id', Auth::id())->get();
        return view('consultant.allAppoinments', compact('allAppoinments'));
    }
}
