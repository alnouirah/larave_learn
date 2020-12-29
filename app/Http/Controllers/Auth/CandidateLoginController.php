<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class CandidateLoginController extends Controller
{
    
    public function showLoginForm(){
        return view('auth.candidate-login');
    }

    public function login(Request $request){
        // validate the data
        $creadentials = $this->validate($request,[
            'email' =>  'required',
            'password'  =>  'required'
        ]);
        // attempt to login
        if(Auth::guard('candidate')->attempt(['email' =>  $request->email,'password'=> $request->password ],$request->remember = false)){
            return redirect(route('candidate-home'));
        }

        // if not redirect to login with form data
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout(){
        Auth::guard('candidate')->logout();
        return redirect(route('welcome'));
    }
}
