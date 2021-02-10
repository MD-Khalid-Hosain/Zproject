<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Advisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdvisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('advisor.index');

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
        $file = $request->file('specilist_image');
        $fileName = $file->getClientOriginalName();
        $destinationPath = public_path() . '/images/';
        $file->move($destinationPath, $fileName);

        $advisor = new Advisor([
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'role' => '4',
            'address' => $request->get('address'),
            'specilist_field' => $request->get('specilist_field'),
            'designation' => $request->get('designation'),
            'advice_types' => $request->get('advice_types'),
            'company_name' => $request->get('company_name'),
            'linkedin' => $request->get('linkedin'),
            'about_you' => $request->get('about_you'),
            'specilist_image' => $fileName,
        ]);
        $advisor->save();

    return redirect ('advisor')->with('success', 'advisor Information saved!');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('advisor.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function edit(Advisor $advisor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advisor $advisor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advisor $advisor)
    {
        //
    }

    public function advisorlist()
    {
        $advisors=DB::table('users')->where('role', '4')->paginate(5);
        return  view('frontend.advisor.list',compact(['advisors']));
    }


}
