<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\CandidateJobs;
use App\CandidateProgress;

class JobsController extends Controller
{
    public function index(){
        $jobs = Auth::guard('candidate')->user()->jobs;
        return view('jobs',compact('jobs'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
        ],[
            'name.required'=>'حقل الحرفه يجب ان لايكون فارغاً !! ',
        ]);
        $request['candidate_id'] = Auth::guard('candidate')->user()->id;
        CandidateJobs::create($request->all());
        $progress = Auth::guard('candidate')->user()->progress;
        if(is_null($progress)){
            addProgress(6,Auth::guard('candidate')->user(),5);
            return redirect('jobs');
        }
        if(!$progress->where('section_id',6)->count()){
            addProgress(6,Auth::guard('candidate')->user(),5);
            return redirect('jobs');
        }
        return redirect('jobs');
    }



    public function destroy(CandidateJobs $jobs){
        $jobs->delete();
        if(!Auth::guard('candidate')->user()->educations->count()){
            Auth::guard('candidate')->user()->progress->where('section_id',6)->first()->delete();
         }
        return redirect('jobs');
    }
}


