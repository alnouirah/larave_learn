<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use App\CandidateTraining;
use App\CandidateProgress;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Auth::guard('candidate')->user()->trainings;
        return view("training",compact('trainings'));
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
            'name'              => 'required',
            'place'             => 'required',
            'duration'          => 'required',
            'certificate'        => 'required',
            
        ],[

            'name.required'           => 'حقل اسم الدورة يجب ان لايكون فارغاً !!',
            'place.required'          => 'حقل مكان الدوره يجب ان لايكون فارغاَ !!',
            'duration.required'       => 'حقل مدة الدورة  يجب ان لايكون فارغاً  !!',
            'certificate.required'     => 'حقل نوع الشهادة  يجب ان لايكون فارغاً  !!',
                     
        ]);
        
        $request['candidate_id'] = Auth::guard('candidate')->user()->id;
        CandidateTraining::create($request->all());
        
        $progress = Auth::guard('candidate')->user()->progress;
        if(is_null($progress)){
            addProgress(3,Auth::guard('candidate')->user(),10);
            return redirect('training');
        }
        if(!$progress->where('section_id',3)->count()){
            addProgress(3,Auth::guard('candidate')->user(),10);
            return redirect('training');
        }
        return redirect('/training');
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
    public function destroy( CandidateTraining $training)
    {
        $training->delete();
        if(!Auth::guard('candidate')->user()->educations->count()){
            Auth::guard('candidate')->user()->progress->where('section_id',3)->first()->delete();
         }
        return redirect('/training');
    }
}
