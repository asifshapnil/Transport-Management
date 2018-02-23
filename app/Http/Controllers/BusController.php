<?php

namespace App\Http\Controllers;

use Auth;
use App\Bus;
use App\Route;
use App\Accept;
use App\Userrequest;


use Illuminate\Http\Request;

class BusController extends Controller
{
  public function addBuses(){
    $routes = Route::all();
    return view('buses.addbuses')->with('routes', $routes);
  }

  public function postBuses(Request $request){
     $this->validate($request, [
      'bus_num'=> 'required|unique:buses',
      'route_id'=> 'required',

     ]);
     $buses = new Bus;
     $buses->bus_num = $request->input('bus_num');
     $buses->route_id = $request->input('route_id');
     $buses->departure = $request->input('departure');
     $buses->totalseat = $request->input('totalseat');

     $buses->request_id = 0;


     $buses->save();

    return redirect('addbuses'.'/'.'success')->with('success', 'New Bus has been added');
  }

  public function showall()
  {
    $buses = Bus::all();
    return view('buses.showall')->with('buses', $buses);
  }

  public function edit($bus_id){
    $bus = Bus::where('id', $bus_id)->first();
    $routes = Route::all();
    return view('buses.updatebus')->with(['bus'=> $bus, 'routes'=>$routes]);
  }

  public function updateBuses(Request $request, $bus_id){
    $buses = Bus::where('id', $bus_id)->first();
    $buses->bus_num = $request->input('bus_num');
    $buses->route_id = $request->input('route_id');
    $buses->departure = $request->input('departure');


    $buses->save();
    return redirect('addbuses'.'/'.'success')->with('success', 'Bus has been updated');

  }

  public function singleBus($bus_num){
    $totalSeat  = Accept::where('bus_num', $bus_num)->get();
    $totalSeat = count($totalSeat);
    $bus = Bus::where('bus_num', $bus_num)->first();
    return view('buses.singleBus')->with(['bus'=> $bus, 'totalseat'=>$totalSeat]);
  }

  public function deleteBus($bus_id){
    $buses = Bus::where('id', $bus_id)->first();
    $buses->delete();
    $requests = Userrequest::where('id', $bus_id)->first();
    $requests->delete();
    $accepts = Accept::where('id', $bus_id)->first();
    $accept->delete();


    return redirect('routes/success')->with('success', 'One Bus hasbeen deleted');
  }
}
