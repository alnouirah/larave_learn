<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\CandidatePc;
use App\CandidateProgress;

class PcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pc = Auth::guard('candidate')->user()->pc;
        return view("pc",compact('pc'));
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
            'name'             =>'required',
            'level'            =>'required',
        ],[
                'name.required'             =>'حقل المهاره يجب ان لايكون فارغاً !!! ',
                'level.required'         =>'حقل مستوى المهارة يجب ان لايكون فارغاً !! ',
        ]);

        $request['candidate_id'] = Auth::guard('candidate')->user()->id;
        CandidatePc::create($request->all());
        $progress = Auth::guard('candidate')->user()->progress;
        if(is_null($progress)){
            addProgress(8,Auth::guard('candidate')->user(),10);
            return redirect('/pc');
        }
        if(!$progress->where('section_id',8)->count()){
            addProgress(8,Auth::guard('candidate')->user(),10);
            return redirect('/pc');
        }
        return redirect('/pc');
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
    public function destroy(CandidatePc $pc)
    {
        $pc->delete();
        if(!Auth::guard('candidate')->user()->educations->count()){
            Auth::guard('candidate')->user()->progress->where('section_id',8)->first()->delete();
         }
        return redirect('/pc');
    }
}

