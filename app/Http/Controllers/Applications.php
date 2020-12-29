<?php

namespace App\Http\Controllers;

use App\Availablejob;
use App\JobApplications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Applications extends Controller
{
    public function index(){
        return view('applications',['applications'=>Auth::guard('candidate')->user()->applications]);
    }

    public function destroy(Availablejob $applications){
        Auth::guard('candidate')->user()->applications()->detach($applications->id);
        return back();
    }
}
