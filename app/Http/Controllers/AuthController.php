<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function getSignup(){
    return view('employee.signup');
  }

  public function postSignup(Request $request){

    $this->validate($request, [
      'email'=> 'required|unique:users|email',
      'employee_id' => 'required|unique:users|min:8',
      'username' => 'required|unique:users|',
      'password' => 'required|min:5',
    ]);
    $users = new User;

    $users->email = $request->input('email');
    $users->employee_id = $request->input('employee_id');
    $users->username = $request->input('username');
    $users->password = bcrypt($request->input('password'));

    $users->save();
    return redirect('/')->with('success', 'You have signed up successfully');



  }

  public function getSignin(){
    return view('employee.signin');
  }


  public function postSignin(Request $request)
  {
    if (!Auth::attempt($request->only(['email', 'password']) )) {
      return redirect()->back()->with('error', 'Credentials do not match');
    }
    $username = Auth()->User()->username;

    return redirect('profile'.'/'.$username)->with(['success'=> 'Welcome back!!', 'username' => $username]);

  }

  public function getLogout()
  {
    Auth::logout();
    return redirect('/');
  }

  public function userProfile($username){
    return view('employee.profile');
  }
}
