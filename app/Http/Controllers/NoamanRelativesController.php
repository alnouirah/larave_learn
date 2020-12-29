<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CandidateNoamanRelatives;
use App\CandidateProgress;
use Auth;

class NoamanRelativesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noamanRelatives = Auth::guard('candidate')->user()->noamanRelatives;
        return view("noamanRelatives",compact('noamanRelatives'));
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
            'phone'            => 'required',
        ],[

            'name.required'             => 'حقل الاسم يجب ان لايكون فارغاً !! ',
            'job.required'              => 'حقل العمل يجب ان لايكون فارغاً !!',
            'phone.required'            => 'حقل الهاتف يجب ان لايكون فارغاً !! ',

        ]);

        $request['candidate_id'] = Auth::guard('candidate')->user()->id;
        CandidateNoamanRelatives::create($request->all());
        $progress = Auth::guard('candidate')->user()->progress;
        if(is_null($progress)){
            addProgress(11,Auth::guard('candidate')->user(),5);
            return redirect('/noamanRelatives');
        }
        if(!$progress->where('section_id',11)->count()){
            addProgress(11,Auth::guard('candidate')->user(),5);
            return redirect('/noamanRelatives');
        }
        return redirect('/noamanRelatives');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
    public function destroy(CandidateNoamanRelatives $noamanRelatives)
    {
        $noamanRelatives->delete();
        if(!Auth::guard('candidate')->user()->educations->count()){
            Auth::guard('candidate')->user()->progress->where('section_id',11)->first()->delete();
         }
        return redirect('/noamanRelatives');
    }
}
