<?php

namespace App\Http\Controllers;

use Auth;
use App\Userrequest;
use App\Bus;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function storeRequest($username,$bus_id,$user_id,$bus_num){
      $request = new Userrequest;
      $request->bus_id = $bus_id;
      $request->user_id = $user_id;
      $request->username = $username;
      $request->bus_num = $bus_num;

      $request->save();

      $updatebus = Bus::where('id', $bus_id)->first();
      $updatebus->request_id = $user_id;
      $updatebus->save();
      return redirect()->back()->with('sucess', 'Request successfully generated');
    }

    public function cancelRequest($username,$bus_id,$user_id){
      $deletebus = Userrequest::where('user_id', $user_id)->where('bus_id', $bus_id)->first();
      $deletebus->delete();


      $updatebus = Bus::where('id', $bus_id)->where('request_id', $user_id)->first();
      $updatebus->request_id = 0;
      $updatebus->save();
      return redirect()->back()->with('sucess', 'Request successfully cancelled');


    }

    // whereColumn([['first_name', '=', 'last_name'],['updated_at', '>', 'created_at']])->get();

}
