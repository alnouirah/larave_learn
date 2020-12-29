<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CandidateGeneralInfo;
use Illuminate\Support\Facades\DB;
use Auth;
use App\user_progress;
use App\Candidate;

class GeneralInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $generalInfo = Auth::guard('candidate')->user()->generalInfos;
        return view("generalInfo",compact('generalInfo'));
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
            'private'                   => 'required',
            'overTime'                  => 'required',
            'currentJob'                => 'required',
            'currentSalary'             => 'required',
            'otherCity'                 => 'required',
            'sick'                      => 'required',
            'kehdma'                    => 'required',
            'visa'                      => 'required',
            'currentStudy'              => 'required',
            'leastSalary'               => 'required',
            'guranties'                 => 'required',
            'habbites'                  => 'required',
            'ownProject'                => 'required',
            'englishLevel'              => 'required',
            'certificate'               => 'required',
        ],[
            'private.required'                   => 'يجب الإجابة اولاً على هذا الخيار  ',
            'overTime.required'                  => 'يجب الإجابة اولاً على هذا الخيار  !!',
            'currentJob.required'                => 'يجب الإجابة اولاً على هذا الخيار  !! ',
            'currentSalary.required'             => 'يجب الإجابة اولاً على هذا الخيار  !! ',
            'otherCity.required'                 => 'يجب الإجابة اولاً على هذا الخيار  !! ',
            'sick.required'                      => 'يجب الإجابة اولاً على هذا الخيار  !!',
            'kehdma.required'                    => 'يجب الإجابة اولاً على هذا الخيار  !! ',
            'visa.required'                      => 'يجب الإجابة اولاً على هذا الخيار  !! ',
            'currentStudy.required'              => 'يجب الإجابة اولاً على هذا الخيار  !! ',
            'leastSalary.required'               => 'حقل الراتب يجب ان لايكون فارغاً !!  !! ',
            'guranties.required'                 => 'حقل توفير الضمانات يجب ان لايكون فارغاً  !!',
            'habbites.required'                  => 'حقل الهوايات يجب أن لايكون فارغاً  !! ',
            'ownProject.required'                => 'يجب عليك الإجابة على هذا الحقل اولاً  !! ',
            'englishLevel.required'              => 'يجب عليك الإجابة على هذا الحقل اولاً   !! ',
            'certificate.required'               => 'يجب عليك الإجابة على هذا الحقل اولاً   !!',

        ]);

        $generalInfo = Auth::guard('candidate')->user()->generalInfos;
        $request['candidate_id'] = Auth::guard('candidate')->user()->id;
        is_null($generalInfo) ? $this->addGeneralInfo($request) : $this->updateGeneralInfo($request,Auth::guard('candidate')->user());
        return redirect('/generalInfo');
    }

    private function addGeneralInfo(Request $request){
        CandidateGeneralInfo::create($request->all());
        $progress = Auth::guard('candidate')->user()->progress;
        if(is_null($progress)){
            addProgress(12,Auth::guard('candidate')->user(),10);
            return redirect('/noamanRelatives');
        }
        if(!$progress->where('section_id',12)->count()){
            addProgress(12,Auth::guard('candidate')->user(),10);
            return redirect('/noamanRelatives');
        }
    }

    private function updateGeneralInfo(Request $request,Candidate $candidate){
        $candidate->generalInfos->update($request->all());
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
    public function destroy($id)
    {
        //
    }
}
