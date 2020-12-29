<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CandidateRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }



    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        $this->validate($request,[
            'name'      =>  'required',
            'email'     =>  'required|email',
            'password'  =>  'required',
        ]);

        $candidate = candidate::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if(Auth::guard('candidate')->attempt(['email' =>  $request->email,'password'=> $request->password ],$request->remember = false)){
            return redirect(route('candidate-home'));
        }
    }
}
