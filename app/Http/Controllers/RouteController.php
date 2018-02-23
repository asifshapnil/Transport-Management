<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Route;
use App\User;
use App\Userrequest;

use Illuminate\Http\Request;

class RouteController extends Controller
{
  public function addRoutes(){
    $buses = Bus::all();
    return view('routes.addRoutes')->with('buses', $buses);
  }

  public function postRoutes(Request $request){
    $this->validate($request, [
      'route'=>'required|unique:routes',

    ]);
    $routes = new Route;
    $routes->route = $request->input('route');

    $routes->save();

    return redirect('routes'.'/'.'success')->with('success', 'New Route has been added');


  }

  public function showall(){
    $username = Auth()->User()->username;
    $user_id = Auth()->User()->id;
    // $requestid = Userrequest::where('user_id', $user_id)->first();
    // if ($requestid == true) {
    //   $requestid = $requestid;
    // }else{
    //   $requestid = false;
    // }

    $routes = Route::all();
    $userrequest = Userrequest::where('user_id', $user_id)->first();
    if ($userrequest == true) {
      $userrequest = $userrequest;
    }else {
      $userrequest = false;
    }
    return view('routes.showall')->with(['routes'=> $routes, 'username' =>$username, 'user_request_id' => $userrequest, 'user_id'=>$user_id]);
  }

  public function showallroute(){
    $routes = Route::all();
    return view('routes.showallroutes')->with('routes', $routes);
  }
  public function addBus($route_id){
    $buses = Bus::all();
    return view('routes.addBus')->with(['route_id'=> $route_id, 'bus'=>$buses]);

  }

  public function postBus(Request $request, $route_id){
    $busid = $request->input('busid');
    $bus = Bus::where('id', $busid)->first();
    $bus->route_id = $route_id;
    $bus->save();

    return redirect('routes/success');
  }
}
