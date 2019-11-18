<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request; 
use Auth;                    //am nat Sure
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating staff Users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

     use AuthenticatesUsers;  //Am nat sure yet
     
     protected $redirectTo = '/staff-home';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
       
        $this->middleware('guest:staff')->except('logout');
       
    }
      //Staff LoginController
    public function showLoginForm()
    {
      return view('staff.login');
      
    }
    
    public function login(Request $request)
    {
      $this->validate($request, [
        'email'=>'required|email',
        'password'=>'required|min:8'

      ]);

      if (Auth::guard('staff')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->get('remember'))){

        return redirect()->intended(route('staff-home'))
        ->with('status1','Login Successful, You are Logged in as Staff!');
      }
      return redirect()->back()->withInput($request->only('email','remember'))->with('status-fail','Login Unsuccessful, Please Provide correct Credentials');

    }

    
}
