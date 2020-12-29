<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Availablejob;
use Illuminate\Http\Request;
use App\CandidateApplication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AvailablejobsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        $availableJobs = Availablejob::where('deadline','>',$todayDate = new Carbon)->get();
        return view("Availablejob",["availableJobs"=>$availableJobs]);
    }

    public function jobsDetail(Availablejob $job){
        return view('jobsDetail',['job'  =>  $job]);
    }

    public function jobsApplay(Availablejob $job){
        $application = Auth::guard('candidate')->user()->applications;
        if($application->isEmpty()){
            CandidateApplication::create([
                'candidate_id'      => Auth::guard('candidate')->user()->id,
                'available_jobs_id' =>  $job->id
            ]);
            Session::flash('message','تم استقبال طلبك بنجاح');
            Session::flash('type','success');

            return redirect(route('available-jobs.index'));
        }elseif(!$application->contains($job->id)){
            CandidateApplication::create([
                'candidate_id'      => Auth::guard('candidate')->user()->id,
                'available_jobs_id' =>  $job->id
            ]);
            Session::flash('message','تم استقبال طلبك بنجاح');
            Session::flash('type','success');
            return redirect(route('available-jobs.index'));
        }else {

            Session::flash('message','المعذرة فقد قمت بالتقديم لهذه الوظيفة مسبقاً ');
            Session::flash('type','danger');
            return redirect(route('available-jobs.index'));
        }
    }
}
