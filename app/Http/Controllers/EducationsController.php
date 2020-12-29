<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CandidateEducations;
use Auth;
use App\CandidateProgress;

class EducationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Auth::guard('candidate')->user()->educations;
        return view("educations",compact('educations'));
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
            'education'         => 'required',
            'major'             => 'required',
            'graduated_date'     => 'required',
            'graduated_country'           => 'required',
            'graduated_place'          => 'required',
        ],[

            'education.required'         => 'حقل المؤهل يجب ان لايكون فارغاً !!',
            'major.required'             => 'حقل التخصص يجب ان لايكون فارغاَ !!',
            'graduated_date.required'     => 'حقل تاريخ التخرج يجب ان لايكون فارغاً  !!',
            'graduated_country.required'           => 'حقل بلد التخرج يجب ان لايكون فارغاً  !!',
            'graduated_place.required'          => 'حقل الجامعة المتخرج منها يجب ان لا يكون فارغاً !! ',
        ]);
            
        $request['candidate_id'] = Auth::guard('candidate')->user()->id;
        CandidateEducations::create($request->all());

        $progress = Auth::guard('candidate')->user()->progress;
        if(is_null($progress)){
            addProgress(2,Auth::guard('candidate')->user(),10);
            return redirect('educations');
        }
        if(!$progress->where('section_id',2)->count()){
            addProgress(2,Auth::guard('candidate')->user(),10);
            return redirect('educations');
        }

        return redirect('/educations');

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
    public function destroy( CandidateEducations $education)
    {
        $education->delete();
        if(!Auth::guard('candidate')->user()->educations->count()){
           Auth::guard('candidate')->user()->progress->where('section_id',2)->first()->delete();
        }
        return redirect('/educations');
    }
}

