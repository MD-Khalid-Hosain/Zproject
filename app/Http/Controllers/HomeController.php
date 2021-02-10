<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Job;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public  function  superadmin(){

        $jobs=DB::table('jobs')->latest()->paginate(5);
        return  view('superadmin.dashboard',compact(['jobs']));

    }

    public  function  admin(){
        return view('admin.dashboard');
    }


    public  function  consultant(){
        return view('consultant.dashboard');
    }


    public  function  advisor(){
        return view('advisor.dashboard');
    }

    public  function  frecurator(){
        return view('frecruiter.dashboard');
    }

    public  function  jobseeker(){
        return view('jobseeker.dashboard');
    }


    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }



}
