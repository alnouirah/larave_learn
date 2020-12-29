<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateDashboardController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:candidate');
    }

    public function dashboard(){
        return view('dashboard');
    }
}
