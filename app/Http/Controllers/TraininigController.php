<?php

namespace App\Http\Controllers;

use App\Models\Traininig;
use Illuminate\Http\Request;
use Faker\Provider\Image;
use Illuminate\Support\Facades\DB;
use App;
use Response;
use View;
use Validator;
class TraininigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings=DB::table('traininigs')->latest()->paginate(5);
        return  view('training.index',compact(['trainings']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('training.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file = $request->file('traning_file');
        $fileName = $file->getClientOriginalName();
        $destinationPath = public_path() . '/images/';
        $file->move($destinationPath, $fileName);


        $tranning= new Traininig([
            'training_title'=>$request->get('training_title'),
            'trainer_name'=>$request->get('trainer_name'),
            'training_category'=>$request->get('training_category'),
            'training_fees'=>$request->get('training_fees'),
            'trainer_designation'=>$request->get('trainer_designation'),
            'affiliate_commission'=>$request->get('affiliate_commission'),
            'traning_file'=> $fileName
        ]);
        $tranning->save();
        return redirect ('training')->with('success', 'Room Information saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Traininig  $traininig
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $training=Traininig::find($id);
        return view::make('training.show')->with('training',$training);
    }

    public function traningview()
    {
        return Traininig::all();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Traininig  $traininig
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $training=Traininig::find($id);
        return view::make('training.edit')->with('training',$training);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Traininig  $traininig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $traininig=Traininig::find($id);

        $traininig->training_title= $request->get('training_title');
        $traininig->topics_name= $request->get('topics_name');
        $traininig->trainer_name= $request->get('trainer_name');
        $traininig->training_category= $request->get('training_category');
        $traininig->training_fees= $request->get('training_fees');
        $traininig->trainer_designation= $request->get('trainer_designation');
        $traininig->affiliate_commission= $request->get('affiliate_commission');

        $traininig->save();

        return redirect ('/training')->with('success', 'training Information saved!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Traininig  $traininig
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $traininig=Traininig::find($id);
        $traininig->delete();
        return redirect ('training')->with('delete', 'Job Information Deleted!');
    }
}
