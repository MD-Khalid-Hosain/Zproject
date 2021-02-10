<?php

namespace App\Http\Controllers;

use App\Models\Appoinment;
use App\Models\User;
use Illuminate\Http\Request;

class RequestController extends Controller
{

    public function index()
    {
        $allAppoinment = Appoinment::get();
        return view('request.index',compact('allAppoinment'));
    }


    public function create()
    {
        //
    }

  public function store(Request $request)
    {
        //
    }

    public function show()
    {

        return view('shortlist.show');
    }


    public function edit(Shortlist $shortlist)
    {
        //
    }


    public function update(Request $request, Shortlist $shortlist)
    {
        //
    }



    public function destroy(Shortlist $shortlist)
    {
        //
    }

    public function requestDetails($user_id){
        $user_details = Appoinment::find($user_id);
        $consultant_details = User::find($user_details->consultant_id);
         return view('request.request_details',compact('user_details', 'consultant_details'));
    }

}
