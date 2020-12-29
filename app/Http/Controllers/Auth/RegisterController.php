<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\candidate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
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

    use RegistersUsers;
    // protected $guard = 'candidates-guard';

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/candidateHome';

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ],[
          'name.required'=>"حقل الإسم يجب أن لايكون فارغاً !!",  
          'name.string'=>"حقل الإسم يجب أن يتكون من أحرف  !!",  
          'name.max'=>"حقل الإسم يجب أن لا يتجاوز 255 حرف   !!",  
          'email.required'=>"حقل البريد الإلكتروني يجب أن لايكون فارغاً !!",  
          'email.email'=>"يجب إدخال بريد إلكتروني صحيح  !!",  
          'email.unique'=>"المعذرة البريد الإلكتروني مسجل مسبقاً لدينا !!",  
          'password.required'=>"حقل كلمة السر يجب أن لايكون فارغاً !!",  
          'password.min'=>"حقل كلمة السر يجب أن لايقل عن 6 أحرف  !!",  
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return candidate::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
