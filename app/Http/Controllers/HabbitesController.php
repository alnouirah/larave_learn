<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\CandidateHabbites;
use App\CandidateProgress;

class HabbitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habbites = Auth::guard('candidate')->user()->habbites;
        return view('habbites',compact('habbites'));
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
        $this->validate($request,[
            'name' => 'required',
        ],[
            'name.required'=>'حقل الهواية يجب ان لايكون فارغاً !! '
        ]);
        $request['candidate_id'] = Auth::guard('candidate')->user()->id;
        CandidateHabbites::create($request->all());
        $progress = Auth::guard('candidate')->user()->progress;
        if(is_null($progress)){
            addProgress(5,Auth::guard('candidate')->user(),5);
            return redirect('habbites');
        }
        if(!$progress->where('section_id',5)->count()){
            addProgress(5,Auth::guard('candidate')->user(),5);
            return redirect('habbites');
        }

        return redirect('habbites');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( CandidateHabbites $habbites)
    {
        $habbites->delete();
        if(!Auth::guard('candidate')->user()->educations->count()){
            Auth::guard('candidate')->user()->progress->where('section_id',5)->first()->delete();
         }
        return redirect('habbites');
    }
}

