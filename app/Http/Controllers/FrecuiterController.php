<?php

namespace App\Http\Controllers;

use App\Models\Frecuiter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FrecuiterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frecruiter.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected function create(array $data)
    {
         User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['mobile_number'],
            'role' => $data['role'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect ('/frecuiter')->with('success', 'Room Information saved!');
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
     * @param  \App\Models\Frecuiter  $frecuiter
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('frecruiter.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frecuiter  $frecuiter
     * @return \Illuminate\Http\Response
     */
    public function edit(Frecuiter $frecuiter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frecuiter  $frecuiter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Frecuiter $frecuiter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frecuiter  $frecuiter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frecuiter $frecuiter)
    {
        //
    }
}
