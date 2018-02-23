<?php

namespace App\Http\Controllers;


use App\Userrequest;
use App\User;
use App\Bus;
use App\Accept;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  

    public function requests(){
      $requests = Userrequest::all();
      $check = Accept::all();


      return view('admin.allrequests')->with(['requests'=> $requests, 'check' => $check]);
    }
    public function acceptsrequests($user_id,$username,$bus_id,$bus_num){
      $check = Accept::where('user_id',$user_id)->first();
      if ($check == false) {
        $accept = new Accept;
        $accept->user_id = $user_id;
        $accept->username = $username;
        $accept->bus_id = $bus_id;
        $accept->bus_num = $bus_num;
        $accept->save();
        return redirect()->back()->with('success', 'Employee accepted');
      }else {
        $exist = "Mr. " .$username. " is already enlisted";
        return redirect()->back()->with('error', $exist);

      }

    }

    public function deleterequests($username, $bus_num){
      $deleterequest = Userrequest::where('username', $username)->where('bus_num', $bus_num)->first();
      $deleterequest->delete();;
      return redirect()->back()->with('success', 'One Request has been deleted');
    }

    public function allaccepts(){
      $accepts = Accept::all();
      return view('admin.allaccepts')->with('accepts', $accepts);
    }
    public function deleteuser($username, $bus_num){
      $deleteuser = Accept::where('username', $username)->where('bus_num', $bus_num)->first();
      $deleteuser->delete();
      return redirect()->back()->with('success', 'One User has been deleted');
    }
}
