<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CandidateRelatives;
use App\CandidateProgress;
use Auth;

class RelativesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relatives = Auth::guard('candidate')->user()->relatives;
        return view("relatives",compact('relatives'));
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
            'name'             => 'required',
            'job'              => 'required',
            'home'            => 'required',
            'phone'            => 'required',
            'relativlity'           => 'required',
        ],[

            'name.required'             => 'حقل الاسم يجب ان لايكون فارغاً !! ',
            'job.required'              => 'حقل العمل يجب ان لايكون فارغاً !!',
            'home.required'            => 'حقل المكان يجب أن لايكون فارغاً !! ',
            'phone.required'            => 'حقل الهاتف يجب ان لايكون فارغاً !! ',
            'relativlity.required'           => 'حقل صلة القرابة يجب أن لايكون فارغاً !! ',

        ]);

        $request['candidate_id'] = Auth::guard('candidate')->user()->id;
        CandidateRelatives::create($request->all());
        $progress = Auth::guard('candidate')->user()->progress;
        if(is_null($progress)){
            addProgress(9,Auth::guard('candidate')->user(),10);
            return redirect('/relatives');
        }
        if(!$progress->where('section_id',9)->count()){
            addProgress(9,Auth::guard('candidate')->user(),10);
            return redirect('/relatives');
        }
        return redirect('/relatives');
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
    public function destroy(CandidateRelatives $relatives)
    {
        $relatives->delete();
        if(!Auth::guard('candidate')->user()->educations->count()){
            Auth::guard('candidate')->user()->progress->where('section_id',9)->first()->delete();
         }
        return redirect('/relatives');
    }
}

